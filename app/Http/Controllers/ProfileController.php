<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use Session;
use Purifier;
use Image;
use Storage;
use App\Category;


class ProfileController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth',['except'=>'show']);
    }

    public function index(){

		return view('user.profile');
	}

	public function show($id) {

		$user = User::find($id);
		$posts =Post::where('user_id',$id)->orderBy('views','desc')->paginate(10);
        $total_view = 0;
        $total_likes = 0;
        foreach ($posts as $post) {
            $total_view+=$post->views;
            $total_likes += $post->likes;
        }

        return view('user.show',compact('user', 'posts', 'total_view', 'total_likes'));

	}

	public function edit($id) {

		$user =User::find($id);

		if (Auth::id() == $id ) {
			return view('user.edit')->withUser($user);
		}
		else{
            Session::flash('success', '!! Unauthorized User !!');
			return redirect('/');
		}
		

	}

	public function update(Request $request, $id) {

		$user = User::find($id);

		//validating the data 
            $this -> validate($request, array(
                'info' => 'required',
                'avatar' => 'sometimes|image|max:2400',
                'coverImage' => 'sometimes|image|max:2400',
                // 'facebook' => 'sometimes|min:7',
                // 'twitter' => 'sometimes|min:7',
                // 'instagram' => 'sometimes|min:7',
                // 'tumblr' => 'sometimes|min:7',
                // 'youtube' => 'sometimes|min:7',
            ));

        //saving the data to the database

        $user->info =  Purifier::clean($request->input('info'));
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->tumblr = $request->tumblr;
        $user->youtube = $request->youtube;

         // saving images
        if($request->hasFile('avatar') ) {
            // getting image file name
            $avatarImage =$request->file('avatar');
            // setting image file name with time
            $avatarFileName = time(). '.' .$avatarImage->getClientOriginalExtension();
            // setting location for image for saving
            $avatarLocation =public_path('images/user-profile/'. $avatarFileName);
            // resizing image and saving to location
            Image::make($avatarImage)->resize(200,200)->save($avatarLocation);
            // getting old image file name
            $oldAvatar = $user->avatar;
            //update the database
            $user->avatar = $avatarFileName;
            //delete the old image
            if($oldAvatar != 'default-avatar.jpg'){
                Storage::delete('user-profile/'.$oldAvatar);
            }
            
        }

        if ($request->hasFile('coverImage') ) {
            $coverImage = $request->file('coverImage');

            $coverImageFileName = time() . '.' .$coverImage->getClientOriginalExtension();

            $coverImageLocation = public_path('images/user-cover/'.$coverImageFileName);

            Image::make($coverImage)->resize(400,400)->save($coverImageLocation);

            $oldCover = $user->coverImage;

            $user->coverImage = $coverImageFileName;

            if ($oldCover != 'defaultProfileCoverImage.jpg') {
                Storage::delete('user-cover/'.$oldCover);
            }
        }
        
        $user->save();

        Session::flash('success', 'Successfully Saved !');

        return redirect()-> route('profile.show', $user->id);
	}	

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserSetting;
use Session;

class UserController extends Controller
{
	// showing posts liked by user
	public function myFavorites()
    {
        $myFavorites = Auth::user()->favorites;

        return view('user.favorited', compact('myFavorites'));
    }

    // show bookmarked posts by user
    public function myBookmarks(){
        $myBookmarks  = Auth::user()->bookmarks;

        return view('user.bookmarked', compact('myBookmarks'));
    }

    public function setting()
    {
        if(Auth::check())
            {
                $user = UserSetting::where('user_id',Auth::user()->id)->first();
                return view('user.setting', compact('method', 'user'));

            }
        else
            return redirect()->back();

    }

    public function user_setting_new(Request $request)
    {
        $user_setting = new UserSetting;
        
        if ( UserSetting::where('user_id',Auth::user()->id)->first() == null) {

            $user_setting ->user_id = Auth::id();
            $user_setting ->show_social_links = $request->show_social_link;
            $user_setting ->show_email_id = $request->show_email_id;

            $user_setting->save(); 

            Session::flash('success' , 'Successfully Saved!');

            return redirect(route('profile.show',Auth::user()->username));

        }
        else {
            $id = UserSetting::where('user_id',Auth::id())->pluck('id');
            return $this->user_setting_update($request, $id);
        }
    }



    public function user_setting_update(Request $request ,$id)
    {
        $user_setting = UserSetting::find($id)->first();

        $user_setting ->show_social_links = $request->show_social_link;
        $user_setting ->show_email_id = $request->show_email_id;

        $user_setting ->save();

        Session::flash('success' , 'Successfully Saved!');

        return redirect(route('profile.show',Auth::user()->username));

    }

}

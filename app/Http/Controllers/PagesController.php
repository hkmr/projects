<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use App\Category;
use App\User;
use Session;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller {

	public function getIndex(){
		$posts = Post::orderBy('created_at','desc')->limit(3)->paginate(3);
		$categories = Category::orderBy('created_at','desc')->take(5)->get();
		$populars =Post::orderBy('views','desc')->paginate(5);
		$user = User::all();

		// recommended System
		$recomends = Post::all()->random(5);

		return view('pages.welcome.main', compact('posts', 'categories', 'populars', 'user', 'recomends'));
	}

	public function getAbout(){
		
		return view('pages.about');
	}

	public function getTerms(){

		return view('pages.terms');
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact(Request $request) {

			$this->validate($request, [
				'email' => 'required|email',
				'subject' => 'required|min:3',
				'message' => 'required|min:10']);

			$data = array(
				'email' => $request->email,
				'subject' => $request->subject,
				'bodyMessage' => $request->message
				);

			Mail::send('emails.contact', $data, function($message) use($data){
				$message->from($data['email']);
				$message->to('mailtwebox@gmail.com');
				$message->subject($data['subject']);
			});

			Session::flash('success', 'Your email has been successfully send!');

			return redirect('/');
	}

	public function search(Request $request)
	{
		$keyword = $request->keywords;

		$results = Post::where('title', 'like', '%'.$keyword.'%')->orWhere('body', 'like', '%'.$keyword.'%')->paginate(5);
		return view('pages.search' ,compact('results'));
	}

	public function setting() {

		return view('pages.setting');
	}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use App\Category;
use App\User;
use Session;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class PagesController extends Controller {

	public function getIndex(){
		$posts = Post::where('status', 1)->orderBy('created_at','desc')->limit(3)->paginate(3);
		$categories = Category::orderBy('created_at','desc')->take(5)->get();

		// Week's trending
		$beginning_of_week = strtotime('last Monday', time()); 
		$end_of_week = strtotime('next Sunday', time()) + 86400; 
		$allPosts = Post::where('status', 1);
		$weekTrendIds = collect([]);
		foreach ($allPosts as $post) {
			if( strtotime($post->created_at) > $beginning_of_week && strtotime($post->created_at) < $end_of_week )
			{
				$weekTrendIds->push($post->id);
			}
		}
		$weekTrends = Post::whereIn('id',$weekTrendIds)->orderBy('views','desc')->take(3)->get();

		// recommended System
		$recomends = [];
		if ($posts->isNotEmpty()) {
			$recomends = Post::all()->where('status',1)->random(5);
		}

		// detect device
		$agent = new Agent();

		return view('pages.welcome.main', compact('posts', 'categories', 'weekTrends' ,'recomends', 'agent'));
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

		$results = Post::where([[strtolower('title'), 'like', '%'.strtolower($keyword).'%'], ['status','=',1]])->orWhere([[strtolower('body'), 'like', '%'.strtolower($keyword).'%'],['status','=',1]])->paginate(30);
		return view('pages.search' ,compact('results','keyword'));
	}

}
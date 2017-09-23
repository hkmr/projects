<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

class BlogController extends Controller
{

	public function getIndex(){

        $posts=Post::orderBy('views','desc')->paginate(21);
        $user = new User;

		return view('blog.index')->withPosts($posts)->withUser($user);
	}

    public function weeksTrending(){

        $posts=Post::orderBy('views','desc')->paginate(21);
        $user = new User;

        return view('blog.weeks_trending')->withPosts($posts)->withUser($user);
    }

    public function getSingle($slug){

    	//fetching from database based on slug
    	$post = Post::where('slug' , '=', $slug)->first();
        $post->increment('views'); 
        $posts =Post::all();
        $users=User::all();
        

    	//returning the view
    	return view('blog.single',compact('post'));
    }
}

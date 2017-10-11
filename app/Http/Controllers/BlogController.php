<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Comment;
use App\User;

class BlogController extends Controller
{

	public function getIndex(){

        $posts=Post::orderBy('views','desc')->paginate(21);
        $user = new User;

		return view('blog.index')->withPosts($posts)->withUser($user);
	}

    public function weeksTrending(){

        // $posts=Post::where('created_at', '>' ,strtotime('previous sunday') )->paginate(9);
        $beginning_of_week = strtotime('last Monday', time()); 
        $end_of_week = strtotime('next Sunday', time()) + 86400; 
        $allPosts = Post::all();
        $weekTrendIds = collect([]);
        foreach ($allPosts as $post) {
            if( strtotime($post->created_at) > $beginning_of_week && strtotime($post->created_at) < $end_of_week )
            {
                $weekTrendIds->push($post->id);
            }
        }
        $posts = Post::whereIn('id',$weekTrendIds)->orderBy('views','desc')->paginate(12);

        return view('blog.weeks_trending', compact('posts'));

    }

    public function getSingle($slug){

    	//fetching from database based on slug
    	$post = Post::where('slug' , '=', $slug)->first();
        $post->increment('views'); 
        $comments = Comment::where('post_id' , $post->id)->get();
        $recommends = Post::where('category_id', $post->category_id)->get()->random(5);

    	//returning the view
    	return view('blog.single',compact('post','comments', 'recommends'));

    }
}

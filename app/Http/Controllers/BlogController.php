<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Comment;
use App\User;
use App\CategoryFollow;

class BlogController extends Controller
{

	public function getIndex(){

        $posts=Post::orderBy('views','desc')->where('status',1)->paginate(21);

		return view('blog.index',compact('posts'));
	}

    public function weeksTrending(){

        $beginning_of_week = strtotime('last Monday', time()); 
        $end_of_week = strtotime('next Sunday', time()) + 86400; 
        $allPosts = Post::where('status',1);
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
    	$post = Post::where([['slug' , '=', $slug],['status',1]])->first();
        $post->increment('views'); 
        $comments = Comment::where('post_id' , $post->id)->orderBy('created_at', 'desc')->get();
        $recommends = Post::where([['category_id', $post->category_id],['status',1]])->get()->take(5);

    	//returning the view
    	return view('blog.single',compact('post','comments', 'recommends'));

    }

    // recommends for login user
    public function userRecommends($id){

        $getCategoryIds = CategoryFollow::where('user_id',$id)->get();

        $posts = Post::whereIn([['category_id',$getCategoryIds],['status',1]])->orderBy('views','desc')->paginate(12);

        return view('recommends/blog_recommend', compact('posts'));

    }

    // recommend for guest user
    public function guestRecommends(){
        
        $posts = Post::where('status',1)->random(50);

        return view('recommends/blog_recommend', compact('posts'));
    }

}

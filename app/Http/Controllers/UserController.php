<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('user.setting');
    }
}

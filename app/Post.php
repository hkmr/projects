<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Favorite;
use App\Bookmark;

class Post extends Model
{
    public function category(){

    	return $this->belongsTo('App\Category');
    }

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function comments() {
    	return $this->hasMany('App\Comment');
    }

    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }

    public function bookmarked()
    {
        return (bool) Bookmark::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }

}

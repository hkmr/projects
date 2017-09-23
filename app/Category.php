<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    protected $table = 'categories';

    public function posts(){

    	return $this->hasMany('App\Post');
    }

    // follows category
    public function follows()
    {
        return $this->belongsToMany(User::class, 'category_follows', 'user_id' , 'category_id')->withTimeStamps();
    }

    // for checking user has followed or not
    public function followed()
    {
        return (bool) CategoryFollow::where('user_id' , Auth::id())
                                ->where('category_id', $this->id)->first();
    }
}

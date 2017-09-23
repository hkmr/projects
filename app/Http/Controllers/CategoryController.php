<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use App\Post;
use App\User;
use App\CategoryFollow;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct(){

        $this->middleware('auth',['except' => 'show']);
    }

    public function index()
    {
        //display a view of all categories
        //also having form to create new category

        $categories = Category::orderBy('created_at','desc')->paginate(50);

        return view('categories.index')->withCategories($categories);
    }

    public function follow(Category $category)
    {
        Auth::user()->follows()->attach($category->id);
        $category->increment('total_followers');
        return back();
    }

    public function unfollow(Category $category)
    {
        Auth::user()->follows()->detach($category->id);
        $category->decrement('total_followers');
        return back();
    }
    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //storing the new category
        $this-> validate($request , array(
            'name' => 'required|max:255|unique:categories' ));

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('success' , 'New Category has been created');

        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::where('id', $id )->get();

        return view('categories.show', compact('category'));
    }

    public function showFollowed()
    {
        $cat_id = CategoryFollow::where('user_id', Auth::id())->pluck('category_id');
        $categories = Category::whereIn('id', $cat_id)->get();
        return view('user.followed', compact('categories'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

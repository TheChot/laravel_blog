<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class FrontendController extends Controller
{
    public function index(){
        return view('home.homeEN');
    }

    public function blogAll()
    {
        $blogs= Blog::orderBy('created_at','desc')->paginate(10);
        // $blogs = [];
        return view('blog.index', compact('blogs'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);

        return view('blog.single', compact('blog'));
    }
}

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
        $blogs= Blog::where('status',0)->orderBy('created_at','desc')->paginate(10);
        $featured_blogs = Blog::where([['status','=',0],['featured','=',1]])->orderBy('created_at','desc')->limit(4)->get();
        // $blogs = [];
        return view('blog.index', compact('blogs','featured_blogs'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        $blog->views += 1;
        $blog->save();  
        $featured_blogs = Blog::where([['status','=',0],['featured','=',1]])->orderBy('created_at','desc')->limit(4)->get();

        return view('blog.single', compact('blog','featured_blogs'));
    }
}

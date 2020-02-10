<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Blog;



class BlogController extends Controller
{
    public function index(){

        // Auth::user()
        $blogs= Blog::orderBy('created_at','desc')->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function singleBlog($id){
        $blog = Blog::find($id);
        if(!isset($blog)){
            return redirect()->route('home');

        }

        return view('blog.single', compact('blog'));
    }

    public function addBlogPage(){
        return view('admin.blog.create');
    }

    public function addBlog(Request $request){
        // return $request->title;
        // $this->validate($request,[
        //     'title'=>'required',
        //     'body'=>'required',
        //     'cover_image'=>'image|nullable',
        // ]);        
        
        //handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'_.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/media/blog_images', $fileNameToStore);

        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = new Blog;

        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->cover_img = $fileNameToStore;
        $blog->status = $request->status;
        $blog->featured = $request->featured;


        $blog->save();

        return redirect()->back();

    }

    public function editBlogPage($id){

        $blog = Blog::find($id);

        if(!isset($blog)){
            return redirect()->back();

        }

        return view('admin.blog.edit', compact('blog'));
    }

    public function editBlog(Request $request, $id){



        // $this->validate($request,[
        //     'title'=>'required',
        //     'body'=>'required',
        //     'cover_image'=>'image|nullable',
        // ]);

        $blog = Blog::find($id);

        //handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'_.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/media/blog_images', $fileNameToStore);

            // if($blog->)
            Storage::delete('public/media/blog_images/'.$blog->cover_image);
            $blog->cover_img = $fileNameToStore;

        }

        


        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->status = $request->status;
        $blog->featured = $request->featured;

        
        $blog->save();

        return redirect()->back();

    }
}

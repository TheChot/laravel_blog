<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Blog;
use App\Contact;
use App\TeamMembers;

// classes
use Mail;


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

    public function contactPage()
    {
        return view('contact_us.index');
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',            
            'body'=>'required',
        ]);

        $contact_form = new Contact;        
        $contact_form->first_name = $request->first_name;
        $contact_form->last_name = $request->last_name;
        $contact_form->email = $request->email;
        $contact_form->phone_number = $request->phone_number;
        $contact_form->body = $request->body;
        $contact_form->save();

        $content = $request;

        Mail::send('emails.contact', ['data'=>$content], function ($m) use ($content){
            $m->from('chota@pynch.co.zm', 'Your Application');

            $m->to('dev@pynch.co.zm', $content->first_name.' '.$content->last_name)->subject('Your Contact Form Sir');
        });

        return redirect()->back();

    }

    public function teamPage()
    {
        $team_members = TeamMembers::where('status',0)->orderBy('level','asc')->get();

        return view('team.index', compact('team_members'));
    }
}

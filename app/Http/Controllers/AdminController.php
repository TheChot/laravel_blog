<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Contact;
use App\User;

// Imported Classes 
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function allContacts()
    {
        $contacts = Contact::orderBy('created_at','desc')->paginate(10);
        return view('admin.contact_us.index', compact('contacts'));
    }

    public function singleContact($id)
    {
        $contact = Contact::find($id);
        $contact->read = 1;
        $contact->save();
        return view('admin.contact_us.single', compact('contact'));
    }

    public function allUsers()
    {
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('admin.users.index', compact('users'));

    }

    public function addUserPage(){
        return view('admin.users.add');
    }

    public function addUser(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'username'=>'required',            
        ]); 

        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->username = $request->username;
        $new_user->status = $request->status;
        $new_user->user_type = $request->user_type;

        $new_user->save();
        return redirect()->back();
    }

    
    public function editUserPage($id){

        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    
    public function editUser(Request $request, $id){
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',            
            'username'=>'required',            
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->username = $request->username;
        $user->status = $request->status;
        $user->user_type = $request->user_type;

        $user->save();



        return redirect()->back();
    }
}

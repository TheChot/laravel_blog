<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

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
}

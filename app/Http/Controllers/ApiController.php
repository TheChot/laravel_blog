<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sendInquiry(Request $request){
        $email_data = (object)['email'=>$request->email, 'name'=>$request->firstName.' '.$request->lastName];
        $email_content = [
            'name'=>$request->firstName.' '.$request->lastName, 
            'title'=>$request->title,
            'email'=>$request->email,
            'phone_number'=>$request->phoneNumber,
            'service'=>$request->service,
            'no_rooms'=>$request->noRooms,
            'unit_space'=>$request->unitSpace,
            'details'=>$request->details,
            
        ];

        Mail::send('emails.inquiryemail', $email_content, function ($m) use ($email_data) {
            $m->from('info@melocleaningservices.com', 'Melo Cleaning App');

            $m->to('info@melocleaningservices.com', $email_data->name)->subject('You have a Service Inquiry from your App');
        });
        return  response()->json(array('message'=>"Message Sent Successfully"));
    }

    public function contactUs(Request $request){
        $email_data = (object)['email'=>$request->email, 'name'=>$request->firstName.' '.$request->lastName];
        $email_content = [
            'name'=>$request->firstName.' '.$request->lastName, 
            'title'=>$request->title,
            'email'=>$request->email,
            'phone_number'=>$request->phoneNumber,            
            'details'=>$request->details,            
        ];

        Mail::send('emails.contactus', $email_content, function ($m) use ($email_data) {
            $m->from('info@melocleaningservices.com', 'Melo Cleaning App');

            $m->to('info@melocleaningservices.com', $email_data->name)->subject('You have a Message from your App');
        });
        return  response()->json(array('message'=>"Message Sent Successfully"));
    }
}

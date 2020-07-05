<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ContactUsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emails.contactus');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Mail::send('emails.contactText',
       array(
           'name' => $request->name,
           'email' => $request->email,
           'user_message' => $request->message
       ), function($message)
   {
       $message->from(env('MAIL_FROM_ADDRESS', 'royalhotel@nachattube.com'));
       $message->to(env('MAIL_FROM_ADDRESS', 'royalhotel@nachattube.com'), 'Admin')->subject('Feedback');
   });

        return redirect()->route('home')
                        ->with('sent','message sent successfully.');
    }
}

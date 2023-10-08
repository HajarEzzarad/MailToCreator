<?php

namespace App\Http\Controllers;


use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    
public function showContactForm()
{
    return view('mail.contact');
}

public function sendEmail(Request $request)
{
        $email = $request->input('email');
        $content = $request->input('message');
        $name = $request->input('name');
        
    Mail::to('hajarezzarad2002@gmail.com')
    ->send(new MailNotify($email,$content,$name));

    return redirect('/email')->with('message', 'Email sent successfully!');
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = array(
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        );

        Mail::to('mahfuzurrahman.system@gmail.com')->send(new ContactMessage($data));

        return redirect()->back()->with('success', 'Your email has been sent successfully!');
    }
}

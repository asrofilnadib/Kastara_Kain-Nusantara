<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to('cs@kastara.co.id')->send(new ContactMessage($email, $message));
        return redirect()->back();
    }
}

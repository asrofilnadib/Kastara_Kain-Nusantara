<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $email = 'fake@example.com';
        Mail::to('fake@gmail.com')->send(new ContactMessage($email));
        return redirect()->back();
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
          'email' => 'required|email|max:255',
          'msg' => 'required|string',
        ]);

        $viewData = [
            $email = $request->input('email'),
            $message = $request->input('msg'),
        ];

        Mail::to('cs@kastara.co.id')->send(new ContactMessage($email, $message));

        return view('mail.contact')->with('viewData', $viewData);
    }
}

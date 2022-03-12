<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact', ['page' => 4]);
    }

    public function sendEmail(Request $request)
    {
        $details =[
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'msg' => $request -> msg,
        ];

        Mail::to('') ->send(new ContactMail($details));
        return back()->with('message_sent', 'Pesan Anda telah terkirim dan kami terima, Terima Kasih :)');
    }
}

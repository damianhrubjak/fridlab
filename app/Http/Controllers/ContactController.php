<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\MailForAdmin;
use App\Mail\MailForSender;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Send contact form data to sender email and to admin
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        Mail::to($request->email)->send(new MailForSender($request->all()));
        Mail::to(env('ADMIN_EMAIL'))->send(new MailForAdmin($request->all()));

        return response()->json(null, 200);
    }
}

<?php

namespace Oppong\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Oppong\Contact\Models\Contact;
use Oppong\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function contact() {
      return view('contact::contacts');
    }

    public function send(Request $request) {

            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name, $request->email, $request->content));
            Contact::create($request->all());

            return redirect(route('contact'));
    }
}

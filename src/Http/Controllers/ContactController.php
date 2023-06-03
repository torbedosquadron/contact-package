<?php

namespace Fathy\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Fathy\Contact\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
//        dd($request);
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect(route('contact'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Contact;
class ContactController extends Controller
{
     public function getContact() {

    return view('contact_us');
    //
}
public function saveContact(Request $request) {


    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',

        'phone_number' => 'required',
        'message' => 'required'
    ]);

    $contact = new Contact;

    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->phone_number = $request->phone_number;
    $contact->message = $request->message;

    $contact->save();

    return back()->with('success', 'Thank you for contact us!');

}
}

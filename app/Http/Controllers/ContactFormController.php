<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\ContactMessage;

class ContactFormController extends Controller
{

    // public function showForm()
    // {
    //     return view('contact-form');
    // }

    public function processForm(ContactFormRequest $request)
    {

        // Retrieve and sanitize form data
        $name = htmlspecialchars($request->input('name'));
        $email = htmlspecialchars($request->input('email'));
        $phone = htmlspecialchars($request->input('phone'));
        $subject = htmlspecialchars($request->input('subject'));
        $messageContent = htmlspecialchars($request->input('messageContent'));

        // Store the form data in the database
        $message = new ContactMessage;
        $message->name = $name;
        $message->email = $email;
        $message->phone = $phone;
        $message->subject = $subject;
        $message->message = $messageContent;
        $message->save();

        // Check if the message was saved successfully
        if ($request->ajax()) {
            // Return JSON response for successful form submission
            return response()->json(['success' => 'We got your message. One of our consultants will contact you in a short period.']);
        } else {
            // Redirect back with success message
            return redirect()->back()->with('success', 'We got your message. One of our consultants will contact you in a short period.');
        }
    }
}

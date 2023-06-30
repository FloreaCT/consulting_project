<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\ContactMessage;

class PWResetController extends Controller
{
    
    public function email(string $email) {
        // something something to send an email to the email from the form

        return view("notauth.home", ['message' => "Email sent to that email address."]);
    }


    public function index(string $id) {
        // $user = User::findOrFail($id);
        // return view("notauth.home");

        // check in DB if user with id has password reset == true
        // if true -> continue to page
        // else -> redirect to "/" with a meaningfull $error variable

        return view("password-reset");
    }

    public function submit(Request $request)
    {
        // double check if user with id has password reset == true
        // validate password min 6 chars ?   password === repeat password   .... => update user . . . 
    }
}

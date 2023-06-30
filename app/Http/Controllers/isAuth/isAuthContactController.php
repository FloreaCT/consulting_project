<?php

namespace App\Http\Controllers\isAuth;
use App\Http\Controllers\Controller;
// use App\Models\Contacts;

use Illuminate\Http\Request;

class isAuthContactController extends Controller
{
    public function get() 
    {
        // to grab user list of contacts and/or addresses where user sent a package(even if not added to contact) - good? :D
        return view("isauth.contact");
    }
}

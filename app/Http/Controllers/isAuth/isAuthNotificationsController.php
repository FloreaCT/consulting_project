<?php

namespace App\Http\Controllers\isAuth;
use App\Http\Controllers\Controller;
use App\Models\Notifications;

use Illuminate\Http\Request;

class isAuthNotificationsController extends Controller
{

    public function get() {
        
        // to get and send to web page the user controllingstring

        $notifications = Notifications::get();
        return view("isauth.notifications", ['notifications' => $notifications]);
    }
}

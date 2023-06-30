<?php

namespace App\Http\Controllers\isAuth;
use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class isAuthPlansController extends Controller
{

    public function get() {
        // to get and send to web page the user controllingstring
        $plans = Plans::get();
        return view("isauth.plans", ['plans' => $plans]);
    }
}

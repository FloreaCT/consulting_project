<?php

namespace App\Http\Controllers\isAdmin;
use App\Http\Controllers\Controller;
use App\Models\Plans;

use Illuminate\Http\Request;

class AdminPlansController extends Controller
{
    public function get() {
        $plans = Plans::get();
        return view("isadmin.plans", ['plans' => $plans]);
    }
}

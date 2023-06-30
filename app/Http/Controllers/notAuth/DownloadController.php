<?php

namespace App\Http\Controllers\notAuth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index() {
        return view("notauth.download");
    }
}

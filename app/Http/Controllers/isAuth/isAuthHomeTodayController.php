<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\EzepostTracking;

class isAuthHomeTodayController extends Controller
{
    public function getAllData()
    {

        $ezepost_addr = auth()->user()->ezepost_addr;
        $receiver_ezepost_addr = EzepostTracking::where('receiver_ezepost_addr', $ezepost_addr)->first();
        $receivedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getReceived($ezepost_addr)) : 0;
        $sentPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getSent($ezepost_addr)) : 0;
        $viewedPackages = $receiver_ezepost_addr ? count($receiver_ezepost_addr->getViewed($ezepost_addr)) : 0;
        $totalPackages = $viewedPackages + $sentPackages + $receivedPackages;


        return view('isauth.home-today', [
            'receivedPackages' => $receivedPackages,
            'sentPackages' => $sentPackages,
            'viewedPackages' => $viewedPackages,
            'totalPackages' => $totalPackages,
        ]);
    }
}

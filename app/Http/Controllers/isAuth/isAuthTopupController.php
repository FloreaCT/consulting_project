<?php
namespace App\Http\Controllers\isAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Topup;
use App\Models\EzepostUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class isAuthTopupController extends Controller
{
    public function get()
    {
        // in case user refreshes the page after successfull topup
        $balance = session('balance');
        $status = session('status');
        $message = session('message');
        
        // Retrieve the email of the authenticated user
        $email = Auth::user()->email;
        // Retrieve the user's balance
        $user = EzepostUser::where('username', $email)->first();
        
        $balance = $user ? $user->balance : null;

        return view('isauth.topup', [
            'balance' => $balance,
            'status' => $status,
            'message' => $message
        ]);
    }

    public function post(Request $request)
    {
       
        // Retrieve the email of the authenticated user
        $email = Auth::user()->email;
        // Retrieve the user's record
        $user = EzepostUser::where('username', $email)->first();
        
        // Check if the user exists
        if ($user) {

            // Get the amount to top up from the form submission
            $amount = $request->input('amount');
            
            // Perform validation on the amount if needed
            // ...
            if($amount < 1){
                return view('isauth.topup', ['balance' => $user->balance, 'status' => 'fail', 'message' => '❌ Minimum payment not reached.']);
            }

            // Update the user's balance
            $user->balance += $amount;
            $user->save();
            // Redirect the user to a success page or perform any other desired action
            
            return redirect()->route('isauth.topup')->with(['balance' => $user->balance, 'status' => 'success', 'message' => '✅ Success! £' . $amount . ' has been added to your account!']);
        } else {
            // User not found, handle the error appropriately
            return view('isauth.topup', ['balance' => $user->balance, 'status' => 'fail', 'message' => '❌ User not found. !?']);
        }
    }
}

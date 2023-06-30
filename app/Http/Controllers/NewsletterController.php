<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscriptionRequest;
use App\Models\Newsletter;
use Illuminate\Database\QueryException;

class NewsletterController extends Controller
{
    public function subscribe(NewsletterSubscriptionRequest $request)
    {
        $email = $request->input('email');

        try {
            // Save the email to the database
            $newsletter = new Newsletter;
            $newsletter->email = $email;


            // Handle validation errors
            if (!$newsletter->save()) {
                return redirect()->back()->withErrors(['newsletter_error' => 'Invalid email. Please provide a valid email address.']);
            }

            // Return a success JSON response or redirect back with success message
            if ($request->ajax()) {
                return response()->json([
                    'success' => 'You are now subscribed to our newsletter.',
                ], 200);
            } else {
                // Redirect back with success message
                return redirect()->back()->with('newsletter_success', 'You are now subscribed to our newsletter.');
            }
        } catch (QueryException $e) {
            // Handle database-related exceptions
            if ($request->ajax()) {
                return response()->json(['newsletter_error' => 'Your are already subscribed.'], 500);
            } else {
                return redirect()->back()->withErrors(['newsletter_error' => 'Your are already subscribed.']);
            }
        }
    }
}

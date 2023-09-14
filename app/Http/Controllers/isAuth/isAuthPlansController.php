<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use App\Models\EzepostUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class isAuthPlansController extends Controller
{

    public function get()
    {
        // Getting the plans
        $plans = Plans::where('name', 'not like', '%Top-up%')->orderBy('price')->get();
        $yearly = '';
        $message = '';
        $err = '';
        return view("isAuth.subscriptions", compact('plans', 'yearly', 'message', 'err'));
    }


    public function show(Plans $plan, Request $request)
    {
        try {
            $intent = auth()->user()->createSetupIntent();
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

            $plans = Plans::where('name', 'not like', '%Top-up%')->orderBy('price')->get();

            $planPriceIDs = [];

            foreach ($plans as $plan) {
                $planPriceIDs[$plan->name] = $stripe->prices->retrieve(
                    $plan->stripe_plan,
                    ['expand' => ['product', 'currency_options']]
                )->currency_options;
            }

            $yearly = $request->yearly;
            $currency = "USD";
            return view('isAuth.subscribe', compact('plans', 'plan', 'intent', 'yearly', 'currency', 'planPriceIDs'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong, please try again later.');
        }
    }

    public function cancel()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $customerStripeID = auth()->user()->stripe_id;
        $customer = $stripe->customers->retrieve($customerStripeID);
        // -------- if customer has subscription, cancel it
        $isExistingSub = $stripe->subscriptions->all(['customer' => $customerStripeID]);
        if (empty($isExistingSub->data)) {
            // User is not already subscribed, continue with the rest of the code
        } else {
            // User is already subscribed, cancel the subscription and continue with the rest of the code
            $subscriptionId = $isExistingSub->data[0]->id;
            $stripe->subscriptions->cancel($subscriptionId);
        }
        // --------


        $stripeTopUpPlanId = Plans::where('slug', 'top-up')->first()->stripe_plan;


        $stripeTopUpPlanPrice = $stripe->prices->retrieve(
            $stripeTopUpPlanId,
            ['expand' => ['product', 'currency_options']]
        );

        $tokenCurrencyOptions = $stripeTopUpPlanPrice->currency_options;

        $tempControlString = auth()->user()->controlstring;

        $tempControlString[1] = "0";
        $tempControlString[2] = "0";

        $tempControlString[3] = "0";
        $tempControlString[11] = "0";
        $tempControlString[12] = "0";
        $tempControlString[13] = "0";
        $tempControlString[14] = "0";
        $tempControlString[15] = "0";
        $tempControlString[16] = "0";
        $tempControlString[17] = "0";


        auth()->user()->controlstring = $tempControlString;
        auth()->user()->save();
        $ezeUser = EzepostUser::where('ezepost_addr', auth()->user()->ezepost_addr)->first();
        $ezeUser->controlstring = $tempControlString;
        $ezeUser->save();

        $plans = Plans::get();
        $yearly = '';
        $intent = auth()->user()->createSetupIntent();
        $ezepost_addr = auth()->user()->ezepost_addr;
        $balance = EzepostUser::where('ezepost_addr', $ezepost_addr)->first()->balance;
        $message = "You have canceled your subscription plan and back to the default Top-Up plan.";

        return view('isAuth.topup', compact('balance', 'message', 'intent', 'tokenCurrencyOptions'));
    }
    // price id > personal starter monthly recurring > price_1Nkl4HKqpzLBt7b1q4rTSjtf
    // price id > personal starter monthly one-time > price_1Nkl2QKqpzLBt7b1KkmpSzKn


    public function subscription(Request $request)

    {
        $plans = Plans::get();
        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $planFromDBstripeID = Plans::where('slug', $request->planType . '-' . $request->planName)->first()->stripe_plan;
            $customerStripeID = auth()->user()->stripe_id;
            $customer = $stripe->customers->retrieve($customerStripeID);

            //this is to change the cancel_at time and it works..yey
            // $subID = $stripe->subscriptions->all(['customer' => $customerStripeID])->data[0]->id;
            // $query = $stripe->subscriptions->update(
            //     $subID, // Replace with the actual subscription ID
            //     [
            //         'cancel_at' => strtotime('+1 year'),
            //     ]
            // );


            // -------- if customer has subscription, cancel it
            $isExistingSub = $stripe->subscriptions->all(['customer' => $customerStripeID]);
            if (empty($isExistingSub->data)) {
                // User is not already subscribed, continue with the rest of the code
            } else {
                // User is already subscribed, cancel the subscription and continue with the rest of the code
                $subscriptionId = $isExistingSub->data[0]->id;
                $stripe->subscriptions->cancel($subscriptionId);
            }
            // --------


            // -------- retrieve sub. plan from Stripe
            $stripeSubPlanPrice = $stripe->prices->retrieve(
                $planFromDBstripeID,
                ['expand' => ['product', 'currency_options']]
            );

            // yearly billable plan - template
            $yearlyBillablePlanTemplate = $stripe->prices->retrieve(
                'price_1Nlf6KKqpzLBt7b1fk4Ns8WS',
                ['expand' => ['product', 'currency_options']]
            );
            // --------


            $currencyOptions = $stripeSubPlanPrice->currency_options;
            $tempPrice = $request->planCurrency === "gbp"
                ? $currencyOptions->gbp->unit_amount
                : ($request->planCurrency === "usd"
                    ? $currencyOptions->usd->unit_amount
                    : $currencyOptions->eur->unit_amount);
            // $request->planBasis === 'monthly' ? 1 : 12
            // working on changing it to be yearly or something.. 
            $yearlyBillablePlanTemplate->type =  $request->planDuration === 'one-time' ? 'one-time' : 'recurring';
            $yearlyBillablePlanTemplate->currency = $request->planCurrency;
            $yearlyBillablePlanTemplate->amount = $request->planBasis === 'monthly' ? $tempPrice : $tempPrice * 12;
            $yearlyBillablePlanTemplate->nickname = ucwords('EZE ' . $request->planType . ' ' . $request->planName . ' ' . ($request->planBasis === 'yearly' ? 'Yearly' : 'Monthly'));
            $yearlyBillablePlanTemplate->recurring->interval = $request->planBasis === 'yearly' ? 'year' : 'month';
            $yearlyBillablePlanTemplate->recurring->interval_count = $request->planBasis === 'yearly' ? 12 : 1;
            $yearlyBillablePlanTemplate->currency_options->{$request->planCurrency}->unit_amount =  $request->planBasis === 'monthly' ? $tempPrice : $tempPrice * 12;
            // working on changing it to be yearly or something.. 


            // // --------
            $currencyOptions = $stripeSubPlanPrice->currency_options;
            $tempPrice = $request->planCurrency === "gbp"
                ? $currencyOptions->gbp->unit_amount
                : ($request->planCurrency === "usd"
                    ? $currencyOptions->usd->unit_amount
                    : $currencyOptions->eur->unit_amount);
            // $request->planBasis === 'monthly' ? 1 : 12
            // working on changing it to be yearly or something.. 
            $stripeSubPlanPrice->type =  $request->planDuration === 'one-time' ? 'one-time' : 'recurring';
            $stripeSubPlanPrice->currency = $request->planCurrency;
            $stripeSubPlanPrice->amount = $request->planBasis === 'monthly' ? $tempPrice : $tempPrice * 12;
            $stripeSubPlanPrice->nickname = ucwords('EZE ' . $request->planType . ' ' . $request->planName . ' ' . ($request->planBasis === 'yearly' ? 'Yearly' : 'Monthly'));
            $stripeSubPlanPrice->recurring->interval = $request->planBasis === 'yearly' ? 'year' : 'month';
            $stripeSubPlanPrice->recurring->interval_count = $request->planBasis === 'yearly' ? 12 : 1;
            $stripeSubPlanPrice->currency_options->{$request->planCurrency}->unit_amount =  $request->planBasis === 'monthly' ? $tempPrice : $tempPrice * 12;
            // // working on changing it to be yearly or something.. 



            $stripe->paymentMethods->attach($request->paymentMethod, [
                'customer' => $customerStripeID,
            ]);

            $stripe->customers->update($customerStripeID, [
                'invoice_settings' => [
                    'default_payment_method' => $request->paymentMethod,
                ],
            ]);


            $subscriptionItems = [
                [
                    'plan' => $request->planBasis === 'monthly' ? $stripeSubPlanPrice : $yearlyBillablePlanTemplate,
                    'quantity' => $request->planBasis === 'yearly' ? round($tempPrice / 100 * 12) : 1,
                ],
            ];


            // $paymentIntent = $stripe->paymentIntents->create([
            //     'automatic_payment_methods' => [
            //         'enabled' => true,
            //         'allow_redirects' => 'never',
            //     ],
            //     'amount' => $request->planBasis === 'yearly' ? $tempPrice / 100 * 12 : $tempPrice,
            //     'currency' => $request->planCurrency,
            //     'customer' => $customerStripeID,
            // ]);
            // $query = $paymentIntent->confirm([
            //     'payment_method' => $request->paymentMethod,
            // ]);

            // $query = $stripe->subscriptions->create([
            //     'customer' => $customerStripeID,
            //     'items' => [
            //         [
            //             'plan' => $request->planBasis === 'monthly' ? $stripeSubPlanPrice : $yearlyBillablePlanTemplate,
            //             'quantity' => $request->planBasis === 'yearly' ? round($tempPrice / 100 * 12) : 1,
            //         ],
            //     ],
            //     // "trial_end" => strtotime('+11 months 30 days'),
            //     'currency' => $request->planCurrency,
            //     'cancel_at_period_end' => $request->planDuration === 'one-time' ? true : false,
            // ]);

            $subscriptionOptions = [
                'customer' => $customerStripeID,
                'items' => $subscriptionItems,
                'currency' => $request->planCurrency,
                'cancel_at_period_end' => $request->planDuration === 'one-time' ? true : false,
            ];


            $user = auth()->user();
            $subscriptions = $user->subscriptions;

            // Step 1: Check if the user has any subscriptions
            if ($subscriptions->isNotEmpty()) {
                // Step 2: If the user has subscriptions, identify the active one(s) and cancel them
                foreach ($subscriptions as $subscription) {
                    if ($subscription->active()) {
                        $subscription->delete();
                    }
                }
            }

            $newSubscriptionName = $request->planType . ' ' . $request->planName;

            try {
                // Add the new subscription with the specified name
                $request->user()->newSubscription($request->planType . ' ' . $request->planName, $planFromDBstripeID)->create($request->token);
            } catch (\Exception $e) {
                Log::error("Error adding new subscription '{$newSubscriptionName}': {$e->getMessage()}");
            }

            if ($request->planDuration === 'one-time' && $request->planBasis === 'yearly') {
                $subID = $stripe->subscriptions->all(['customer' => $customerStripeID])->data[0]->id;
                $query = $stripe->subscriptions->update(
                    $subID, // Replace with the actual subscription ID
                    [
                        'cancel_at' => strtotime('+1 year'),
                    ]
                );
            }

            // after all stripe checks gone through, time to update our database -----------------------------------------

            $tempControlString = auth()->user()->controlstring;
            $planMapping = [
                'starter' => '1',
                'basic' => '2',
                'premium' => '3',
            ];

            $tempControlString[1] = $request->planType === "personal" ? "0" : "1";
            $tempControlString[2] = $planMapping[$request->planName] ?? $tempControlString[2];

            $tempControlString[3] = $request->planBasis === "yearly" ? "1" : "0";
            $tempControlString[17] = $request->planDuration === "recurring" ? "1" : "0";

            if ($request->planBasis === "yearly") {
                $tempDate = date('dmy', strtotime('+1 year'));
            } else {
                $tempDate = date('dmy', strtotime('+1 month'));
            }
            $tempControlString[11] = $tempDate[0];
            $tempControlString[12] = $tempDate[1];
            $tempControlString[13] = $tempDate[2];
            $tempControlString[14] = $tempDate[3];
            $tempControlString[15] = $tempDate[4];
            $tempControlString[16] = $tempDate[5];

            auth()->user()->controlstring = $tempControlString;
            auth()->user()->save();
            $ezeUser = EzepostUser::where('ezepost_addr', auth()->user()->ezepost_addr)->first();
            $ezeUser->controlstring = $tempControlString;
            $ezeUser->save();

            $yearly = '';
            $message = 'Success! You successfuly subscribed to ' . ucwords('EZE ' . $request->planType . ' ' . $request->planName . ' ' . ($request->planBasis === 'yearly' ? 'Yearly.' : 'Monthly.'));
            $err = '';
            return view("isAuth.subscriptions", compact('plans', 'yearly', 'message', 'err'));
        } catch (\Exception $e) {
            $message = '';
            $err = $e->getMessage();

            $yearly = '';
            return view("isAuth.subscriptions", compact('plans', 'yearly', 'message', 'err'));
        }
    }
}

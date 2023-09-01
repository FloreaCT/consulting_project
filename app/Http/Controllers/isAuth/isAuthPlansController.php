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

        return view("isauth.subscriptions", compact('plans','yearly'));
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
            return view('isauth.subscribe', compact('plans','plan', 'intent', 'yearly', 'currency', 'planPriceIDs'));

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong, please try again later.');
        }
    }
    
    public function cancel()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
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
    
        return view('isauth.topup', compact('balance', 'message', 'intent', 'tokenCurrencyOptions'));
    }
    // price id > personal starter monthly recurring > price_1Nkl4HKqpzLBt7b1q4rTSjtf
    // price id > personal starter monthly one-time > price_1Nkl2QKqpzLBt7b1KkmpSzKn
    
    
    public function subscription(Request $request)
    {
        dd($request);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $planFromDBstripeID = Plans::where('slug', $request->planType . '-' . $request->planName)->first()->stripe_plan;

        $customerStripeID = auth()->user()->stripe_id;
        $customer = $stripe->customers->retrieve($customerStripeID);

        $isExistingSub = $stripe->subscriptions->all(['customer' => $customerStripeID]);
        if (empty($isExistingSub->data)) {
            // User is not already subscribed, continue with the rest of the code
        } else {
            // User is already subscribed, cancel the subscription and continue with the rest of the code
            $subscriptionId = $isExistingSub->data[0]->id;
            $stripe->subscriptions->cancel($subscriptionId);
        }
        
        $stripeSubPlanPrice = $stripe->prices->retrieve(
            $planFromDBstripeID,
            ['expand' => ['product', 'currency_options']]
        );
        $stripeSubPlanPrice->recurring->interval = $request->planBasis === 'yearly' ? 'year' : 'month';
        $stripeSubPlanPrice->recurring->interval_count = $request->planBasis === 'yearly' ? 12 : 1;
        $stripeSubPlanPrice->currency_options->{$request->planCurrency}->unit_amount;


        $paymentMethod = $stripe->paymentMethods->retrieve(
            $request->paymentMethod,
            []
        );
        $hasCustomerPaymentMethod = $stripe->paymentMethods->all([
            'customer' => $customerStripeID,
            'type' => 'card',
          ]);

        if (empty($hasCustomerPaymentMethod->data)) {
            $paymentMethod->attach([
                'customer' => $customerStripeID,
            ]);
            $tempCustomer = $stripe->customers->retrieve($customerStripeID);
            $tempCustomer->invoice_settings->default_payment_method = $request->paymentMethod;
            $tempCustomer->save();
        }

        $ttt = $stripe->subscriptions->create([
            'customer' => $customerStripeID,
            'items' => [
                [
                    'plan' => $stripeSubPlanPrice,
                    // 'quantity' => $request->planBasis === 'monthly' ? 1 : 12,
                ],
            ],
            // "trial_end" => strtotime('+11 months 30 days'),
            // 'billing_cycle_anchor' => strtotime('+1 year'),
            'currency' => $request->planCurrency,
            'cancel_at_period_end' => $request->planDuration === 'one-time' ? true : false,
        ]);
        

        dd($ttt );



        // -------------------------------------

        // -------------------------------------

        // -------------------------------------



        // $yearly = $request->yearly;
        // $plan_name = $plan->name;
        // $priceId = 'price_1Nkl2QKqpzLBt7b1KkmpSzKn';
        // $priceId2 = 'price_1Nkl4HKqpzLBt7b1q4rTSjtf';
        // $currency = 'GBP'; // Set the desired currency code
        // $frequency = 'one_time'; // Set the desired currency code

        // $stripeCharge = $request->user()->charge(
        //     100, $request->paymentMethodId
        // );

        // if($frequency === "one_time"){
        //     $subscription = $request->user()->newSubscription('default', $priceId)
        //     ->create($request->token, [], [
        //         'currency' => $currency,
        //     ]);
        // } else {
        //     $subscription = $request->user()->newSubscription('default', $priceId2)
        //     ->create($request->token, [], [
        //         'currency' => $currency,
        //     ]);
        // }
        // $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)->create($request->token);

        // after all stripe checks gone through
        $this->updateUser($request);
        
        $plans = Plans::get();
        return view("isauth.subscriptions", compact('plans'));
    }

    
    public function updateUser(Request $request)
    {
        $plans = Plans::get();
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

        // dd($request,$tempControlString);
        


        return view("isauth.subscriptions", compact('plans'));
    }
}

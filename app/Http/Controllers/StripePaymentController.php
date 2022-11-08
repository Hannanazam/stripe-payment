<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
  
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
                "amount" => 100 * $request->amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Stripe Payment your object here." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}

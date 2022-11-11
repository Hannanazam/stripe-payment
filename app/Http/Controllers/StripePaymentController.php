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
        $session_data = session()->get('data');
        return view('stripe',compact('session_data'));
    }
  
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
                "amount" => 100 * $request->amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => 'email of sender is '.session()->get('data')[0]
        ]);
  
        Session::flash('success', 'Payment successful!');
        session()->forget('data');
        return redirect()->route('form_field');
    }
    public function generate_link(Request $request)
    {
        $email = $request->email;
        $amount = $request->amount;
        session()->put('data', [$email,$amount]);
        $session = session()->get('data');
        return view('field-trans.form1',compact('session'));
    }
}

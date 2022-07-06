<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $totalamount = \Cart::getTotal();
        Stripe\Stripe::setApiKey('sk_test_51HjIu0CtN8FBu4sMr7xO8X7dVGJMAkYBCGL0c9rbSUfojjRjCr32dNSmGx0zjv7kcvJUqy4Tm50rykGZXRWyN1cp00IXuqoB5a');
        Stripe\Charge::create ([
                "amount" => $totalamount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "test payment for sahoolathkaar"
        ]);

        Session::flash('success', 'Payment successful!');
        \Cart::clear();

        return back();
    }
}

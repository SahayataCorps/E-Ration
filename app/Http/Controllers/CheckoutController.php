<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Cart; 
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
    	return view('checkout');
    }

    public function pay()
    {

    	Stripe::setApiKey("sk_test_C0SOME3BcCghc8OP4CxfCLMr");
    	$token = request()->stripeToken;
    	$charge = Charge::create([
              'amount' => Cart::total()*100,
              'currency' => 'usd',
              'description' => 'Fuck You',
              'source' => $token
    	]);
    	Session::flash('success','Purchase successfull.');
    	Cart::destroy();
        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessfull);
    	return redirect('/');
    }
}

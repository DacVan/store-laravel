<?php

namespace App\Http\Controllers\frontend;

use  App\Http\Requests\CheckoutRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function GetCheckout()
    {
        return view('frontend.checkout.checkout');
    } 
    
    public function GetComplete()
    {
        return view('frontend.checkout.complete');
    }
    public function PostCheckout(CheckoutRequest $request)
    {

    }
}

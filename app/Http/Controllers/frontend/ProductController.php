<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function GetDetail()
    {
        return view('frontend.product.detail');    
    }
    public function GetShop()
    {
        return view('frontend.product.shop');    
    }
}



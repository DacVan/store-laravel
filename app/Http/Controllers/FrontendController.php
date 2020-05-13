<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function GetIndex()
    {
        echo "Đây là trang chủ";
    }
    public function GetAbout()
    {
        echo "Đây là trang about";
    }    
    public function GetCart()
    {
        echo "Đây là trang cart";
    }   
     public function GetCheckout()
    {
        echo "Đây là trang checkout";
    }   
     public function GetComplete()
    {
        echo "Đây là trang copmlete";
    }   
     public function GetContact()
    {
        echo "Đây là trang contact";
    }   
     public function GetDetail()
    {
        echo "Đây là trang detail";
    }
    public function GetShop()
    {
        echo "Đây là trang shop";
    }
}

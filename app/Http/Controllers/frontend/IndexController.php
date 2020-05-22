<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function GetIndex()
    {
       return view('frontend.index');
    }
    
    public function GetAbout()
    {
        echo "Đây là trang about";
    }
    public function GetContact()
    {
        return view("frontend.contact");
    } 
}

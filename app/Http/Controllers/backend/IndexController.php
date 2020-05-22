<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function GetIndex()
    {
        return view("backend.index");
    }
    function Logout()
    {
        Auth::logout();
        return redirect('login');
    }
}

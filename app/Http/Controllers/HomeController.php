<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $userInfo = auth()->user();
        return view("app.home", compact('userInfo'));
    }

    public function quotation()
    {
        
    }

}

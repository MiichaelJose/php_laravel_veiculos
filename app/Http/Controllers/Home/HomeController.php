<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() 
    {
        return view('home');
    }

    public function store() 
    {
        
    }
}

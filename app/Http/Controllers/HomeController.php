<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // iets ophalen uit database
    // meegeven aan view
    public function showHome()
    {
        return view('home');
    }

}

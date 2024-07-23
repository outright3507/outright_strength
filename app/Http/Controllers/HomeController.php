<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function signup()
    {
     return view('partials.sign-up');
    }
    public function login()
    {
     return view('partials.login');
    }
    public function index()
    {
     return view('partials.home');
    }
}

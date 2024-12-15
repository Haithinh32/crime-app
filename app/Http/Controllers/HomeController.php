<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        return view('Homepage');
    }

    public function post()
    {
        return view('Post');
    }

    public function profile()
    {
        return view('profile');
    }
}

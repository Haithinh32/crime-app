<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

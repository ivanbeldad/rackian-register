<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function get()
    {
        return view('register');
    }

    public function post(Request $request)
    {
        return view('register');
    }
}

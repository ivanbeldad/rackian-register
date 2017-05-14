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
        $this->validate($request, [
            'username' => 'required|unique:authentication_user|min:4|max:255',
            'email' => 'required|email|unique:authentication_user',
            'password' => 'required|min:6|max:255|confirmed',
        ]);
        return Response('Formulario enviado');
    }
}

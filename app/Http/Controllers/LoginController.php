<?php

namespace App\Http\Controllers;

// Predefined namespace for saving requests
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login');
    }

    public function handleLogin (Request $request)
    {
        // dd($request->all());


        // alfa - input must only contain only letters
        // min6 - input must contain minimum 6 characters
        // max:15 - input must contain maximum 15 characters
        // email - The email field must be a valid email address
        $request->validate([
            'name' => ['required', 'alpha', 'min:6', 'max:15'],
            'email' =>  ['required', 'email'],
            'password' =>  ['required']
        ]);

        return $request;
    }
}
                                 
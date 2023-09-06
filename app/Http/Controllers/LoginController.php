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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        return $request;
    }
}
                             
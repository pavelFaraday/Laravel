<?php

namespace App\Http\Controllers;

// Predefined namespace for saving requests
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login');
    }
    
    public function handleLogin (LoginRequest $request)
    {
        return $request;
    }
}

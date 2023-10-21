<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request) {
        return $request->all();
    }
}

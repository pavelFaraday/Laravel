<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // get hole data collection from DB table as an array
        return DB::table('posts')->get();

        // get element with 'id=7' from DB table as an array
        return DB::table('posts')->find(7);

        // get first element from DB table as an array
        return DB::table('posts')->first();
        
        return view('home', compact('blogs'));
    }
}


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

        // get single column 'title' data from DB table as an array
        return DB::table('posts')->pluck('title', 'id');

        /* ------------------------------ Where clause ------------------------------ */

        // get specific element with "id=10" as an array
        return DB::table('posts')->where('id', '=', 10)->get();

        // get specific element with "id>10" as an array
        return DB::table('posts')->where('id', '>', 10)->get();

        // get specific element with "id>10 && id<=21" as an array
        return DB::table('posts')->where('id', '>', 10)->where('id', '<=', 21)->get();

        // get specific element with "status=!1" as an array
        return DB::table('posts')->where('status', '!=', 1)->get();
        
        return view('home', compact('blogs'));
    }
}

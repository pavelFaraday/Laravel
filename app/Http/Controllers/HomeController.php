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
        /* -------------------------------------------------------------------------- */
        /*                            get data - GET method                           */
        /* -------------------------------------------------------------------------- */
        // get hole data collection from DB table as an array
        // return DB::table('posts')->get();

        // get element with 'id=7' from DB table as an array
        // return DB::table('posts')->find(7);

        // get first element from DB table as an array
        // return DB::table('posts')->first();

        // get single column 'title' data from DB table as an array
        // return DB::table('posts')->pluck('title', 'id');


        /* ---------------------- get data with "Where" condition -------------------- */

        // get specific element with "id=10" as an array
        // return DB::table('posts')->where('id', '=', 10)->get();

        // get specific element with "id>10" as an array
        // return DB::table('posts')->where('id', '>', 10)->get();

        // get specific element with "id>10 && id<=21" as an array
        // return DB::table('posts')->where('id', '>', 10)->where('id', '<=', 21)->get();

        // get specific element with "status=!1" as an array
        // return DB::table('posts')->where('status', '!=', 1)->get();




        /* -------------------------------------------------------------------------- */
        /*                         insert data - INSERT method                        */
        /* -------------------------------------------------------------------------- */

        /*
        DB::table('posts')->insert([
        [
            'title' => 'This is the test Data',
            'description' => 'lorem ipsum dolor',
            'status' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' =>date('Y-m-d'),
        ],
        [
            'title' => 'This is another title',
            'description' => 'ldkd dolor',
            'status' => 0,
            'created_at' => date('Y-m-d'),
            'updated_at' =>date('Y-m-d'),
        ]
        ]);
        
        dd('success');
        */





        /* -------------------------------------------------------------------------- */
        /*                         update data - UPDATE method                        */
        /* -------------------------------------------------------------------------- */

        DB::table('posts')->where('id', 13)->update([
            'title' => 'The Updated Data',
            'description' => 'Updated description',
            'status' => 1,
        ]);

        dd('success');


        
        return view('home', compact('blogs'));
    }
}
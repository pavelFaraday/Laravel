<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
       /*                                Eloquent ROM                                */
       /* -------------------------------------------------------------------------- */

       // all() == get() ||| get all data from Posts table
       return $posts = Post::all();
    }
}

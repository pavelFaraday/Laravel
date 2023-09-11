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
       /*                                 UPLOAD FILE                                */
       /* -------------------------------------------------------------------------- */


        return view('home');
    }
}
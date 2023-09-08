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

       // all() == get() ||| get all data from Posts table |||  === DB::table('posts')->get();  ||| Returns an array[]
       // return Post::all(); 

       // get current single row data from table with id=17 ||| Returns an array[]
       // return Post::find(17);

       // get "title" field from table name with id=17 ||| Returns an array[]
       // $post =  Post::find(17);
       // return $post->title;

       // get current single row data from table with id=898 ||| If no matching model exist, it throws an error1. ||| Returns an array[]
       // return Post::findorFail(898);


       // Extract data from received array
       $posts = Post::all(); 
       foreach($posts as $post) {
           echo $post->title . "<br>";
       }
    }
}
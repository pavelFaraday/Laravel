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


       /* -------------------------------- Get Data -------------------------------- */

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
       /*
       $posts = Post::all(); 
       foreach($posts as $post) {
           echo $post->title . "<br>";
       }
       */



       /* -------------------------- get data - 'WHERE' condition ------------------------- */

       // get data from columns "views", which data is > then 100
       // return Post::where('views', '>', 100)->get();

       // complex filtering - strict condition --> throws NULL if any of "where" query will fail
       // return Post::where('views', '>', 100)->where('id', '=', '16')->get();

       // "orWhere" query complex filtering - light condition
       // return Post::where('views', '>', 100)->orWhere('id', '=', '16')->get();



       /* ------------------------- INSERT Data in Database ------------------------ */
       /*
       $post = new Post();

       $post->title = 'post 4';
       $post->description = "Georgia is Beautifull Country.";
       $post->status = "1";
       $post->created_at = date('Y-m-d');
       $post->updated_at = date('Y-m-d');
       $post->views = 400;

       $post->save();

       dd('success');
       */



       /* ------------------------- UPDATE data in Database ------------------------ */
       /*
       $post = Post::find(17); // instead of "FIND" you can use also "where()-get()" combination query 👆
       $post->title = "This is updated title - that is cool :)";
       $post->description = "Hello World - This is post description :) ";
       $post->save(); 

       dd("success");
       */



       /* ------------------------ DELETE Data from Database ----------------------- */
       /*   */
       // Post::findOrFail(19)->delete();
       // OR
       // Post::where('id', '=', 18)->delete();


       /* ------------------------ SOFT DELETE Data from Database ----------------------- */

       // get only trashed column data 
       // return Post::onlyTrashed()->get(); 

       // Restore Soft deleted Data
       Post::withTrashed()->find(18)->restore();

       // Delete Soft deleted Data permanently
       Post::withTrashed()->find(18)->ForceDelete();
       
       
       dd('success');
    
    }
}


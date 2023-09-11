<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



use Illuminate\Support\Facades\Storage;

use File;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       /* -------------------------------------------------------------------------- */
       /*                                 DELETE FILE                                */
       /* -------------------------------------------------------------------------- */


       /* ------------------------- DELETE file - Option 1: ------------------------ */

       // find 'public' path --> delete '/images/myimage.png' from it - the best option !!!
       // Storage::disk('public')->delete('/images/myimage.png');



        /* ------------------------- DELETE file - Option 2: ------------------------ */

       // storage_path() ==> "C:\MAMP\htdocs\Laravel-Udemy\storage"
       // File::delete(storage_path("/app/public/images/image1.png")); 

       

       /* ------------------------- DELETE file - Option 3: ------------------------ */
       // unlink() method
       // unlink(storage_path("/app/public/images/image2.png"));

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage (Request $request)
    {
        // "image" means ==> "name="image"
        // store() is prebuilt method for saving file
        // file is stored in storage/app/public/images folder
        $request->image->store('/images');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage (Request $request)
    {
        /* -------------------------------------------------------------------------- */
        /*                           File Upload Validation                           */
        /* -------------------------------------------------------------------------- */


        // 'image' means ==> "name="image"
        // The image field must be at least 100 kilobytes.
        // The image field must be minimum 500 kilobytes.
        // The image field must be a file of type: png, jpg, gif.
        $request->validate([
            'image' => ['required', 'min:100', 'max:500', 'mimes:png,jpg,gif'] // 500KB
        ]);

        
        // "image" means ==> "name="image"
        // store() is prebuilt method for saving file
        // file is stored in storage/app/public/images folder
        $request->image->store('/images');
    }
}

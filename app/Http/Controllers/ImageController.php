<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ResponseSequence;
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
        


        /* -------------------------------------------------------------------------- */
        /*                        Redirection after file upload                       */
        /* -------------------------------------------------------------------------- */


        // Opton 1 - after storing file, redirect user tospecific URL
        return redirect('/success');

        // Opton 2 - after storing file, redirect user to file upload page (/home)
        return redirect()->back();

        // Opton 3 - what should happen after storing file? - redirect user t specific 'success' route
        return redirect()->route('success');
    }


    /* -------------------------------------------------------------------------- */
    /*                                Download File                               */
    /* -------------------------------------------------------------------------- */

    public function download() 
    {
        return response()->download(public_path('storage/images/image3.png'));
    }
}

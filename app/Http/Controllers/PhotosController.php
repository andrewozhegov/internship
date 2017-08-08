<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;

class PhotosController extends Controller
{

    public function show()
    {
        $photos = Photo::all();

        return view('photos', array(
            'photos' => $photos
        ));
    }
}

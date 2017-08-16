<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photo;

class PhotosController extends Controller
{
    public function show($status = null)
    {
        $photos = Photo::all();

        return view('photos', [
            'status' => $status,
            'photos' => $photos
        ]);
    }
}

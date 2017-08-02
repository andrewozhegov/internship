<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function show()
    {
        return view('photos');
    }
}

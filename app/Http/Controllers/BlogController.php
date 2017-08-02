<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show()
    {
        return view('aboutme');
    }

    public function comment()
    {
        //return view('aboutme');
    }

    public function deleteComment()
    {
        //return view('aboutme');
    }
}

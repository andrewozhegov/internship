<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show()
    {
        return view('blog');
    }

    public function comment()
    {
        //return view('');
    }

    public function deleteComment()
    {
        //return view('');
    }
}

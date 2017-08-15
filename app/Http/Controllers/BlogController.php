<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function show($status = null)
    {
        $blogs = Blog::all();

        return view('blog',[
            'status' => $status,
            'blogs' => $blogs
        ]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestBookController extends Controller
{
    public function show()
    {
        return view('testbook');
    }

    public function delete()
    {
        //return view('aboutme');
    }
}

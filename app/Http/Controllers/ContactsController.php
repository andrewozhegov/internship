<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show()
    {
        return view('contacts');
    }

    public function send(Request $request)
    {
        //print_r($_POST);
    }
}

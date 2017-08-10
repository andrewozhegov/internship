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
        $rules = [
            'name' => 'required|regex:[[а-яА-яЁё]{1,15}\s[а-яА-яЁё]{1,15}\s[а-яА-яЁё]{1,15}]',
            'sex' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|regex:[\+[37][0-9]{9,11}]'
        ];

        $this->validate($request, $rules);
    }
}

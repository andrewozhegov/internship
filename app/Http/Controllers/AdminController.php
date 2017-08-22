<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        return view('admin.admin');
    }
}

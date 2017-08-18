<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Film;
use App\Band;

class InterestsController extends Controller
{
    public function show()
    {
        return view('interests', [
            'books' => Book::all(),
            'films' => Film::all(),
            'bands' => Band::all()
        ]);
    }
}

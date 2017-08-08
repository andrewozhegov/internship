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
        // Получим все записи из таблиц

        $books = Book::all();
        $films = Film::all();
        $bands = Band::all();

        // Передаем виду массивы с данными

        return view('interests', array(
            'books' => $books,
            'films' => $films,
            'bands' => $bands
        ));
    }
}

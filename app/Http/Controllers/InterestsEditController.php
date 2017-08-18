<?php

namespace App\Http\Controllers;

use App\Book;
use App\Film;
use App\Band;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InterestsEditController extends Controller
{
    public function show($item = null, $id = null)
    {
        if (($id != null) && ($item != null))
        {
            switch ($item)
            {
                case 'book':
                {
                    $status = 'update';
                    $films = $bands = null;
                    $book = Book::find($id);
                    $books = [
                        'name' => $book->name,
                        'poster' => $book->poster(),
                        'author' => $book->author,
                        'year' => $book->year,
                        'livelib' => $book->livelib,
                        'annotation' => $book->annotation
                    ];
                    break;
                }
                case 'film':
                {
                    $status = 'update';
                    $books = $bands = null;
                    $film = Film::find($id);
                    $films = [
                        'name' => $film->name,
                        'poster' => $film->poster(),
                        'genre' => $film->genre,
                        'year' => $film->year,
                        'country' => $film->country,
                        'kinopoisk' => $film->kinopoisk,
                        'annotation' => $film->annotation
                    ];
                    break;
                }
                case 'band':
                {
                    $status = 'update';
                    $books = $films = null;
                    $band = Film::find($id);
                    $bands = [
                        'name' => $band->name,
                        'poster' => $band->poster(),
                        'genre' => $band->genre,
                        'year' => $band->year,
                        'country' => $band->country,
                        'lastfm' => $band->lastfm,
                        'yam' => $band->yam,
                        'instagram' => $band->instagram,
                        'youtube' => $band->youtube,
                        'annotation' => $band->annotation
                    ];
                    break;
                }
            }
        }
        else
        {
            $books = Book::all();
            $films = Film::all();
            $bands = Band::all();
            $status = null;
        }

        return view('admin.interestsedit', [
            'status' => $status,
            'books' => $books,
            'films' => $films,
            'bands' => $bands
        ]);
    }

    public function add(Request $request)
    {
        switch ($request->get('item'))
        {
            case 'book':
            {
                $this->validate($request, [
                    'name' => 'required',
                    'poster' => 'file|image',
                    'author' => 'required',
                    'year' => 'required|integer',
                    'livelib' => 'required|url',
                    'annotation' => 'required'
                ]);

                $name = $request->get('name');
                $poster = 'book_img/'.$request->file('book-img')->getClientOriginalName();
                $author = $request->get('author');
                $year = $request->get('year');
                $livelib = $request->get('livelib');
                $annotation = $request->get('annotation');

                if (Storage::put($poster, file_get_contents($request->file('book-img')->getRealPath())))
                {
                    Book::create([
                        'name' => $name,
                        'poster' => $poster,
                        'author' => $author,
                        'year' => $year,
                        'livelib' => $livelib,
                        'annotation' => $annotation
                    ]);
                }
            }
            case 'film':
            {
                $this->validate($request, [
                    'name' => 'required',
                    'poster' => 'file|image',
                    'genre' => 'required',
                    'year' => 'required|integer',
                    'country' => 'required',
                    'kinopoisk' => 'required|url',
                    'annotation' => 'required'
                ]);

                $name = $request->get('name');
                $poster = 'film_img/'.$request->file('film-img')->getClientOriginalName();
                $genre = $request->get('genre');
                $year = $request->get('year');
                $country = $request->get('country');
                $kinopoisk = $request->get('kinopoisk');
                $annotation = $request->get('annotation');

                if (Storage::put($poster, file_get_contents($request->file('film-img')->getRealPath())))
                {
                    Book::create([
                        'name' => $name,
                        'poster' => $poster,
                        'genre' => $genre,
                        'year' => $year,
                        'country' => $country,
                        'kinopoisk' => $kinopoisk,
                        'annotation' => $annotation
                    ]);
                }
            }
            case 'band':
            {
                $this->validate($request, [
                    'name' => 'required',
                    'poster' => 'file|image',
                    'genre' => 'required',
                    'year' => 'required|integer',
                    'country' => 'required',
                    'lastfm' => 'required|url',
                    'yam' => 'required|url',
                    'instagram' => 'required|url',
                    'youtube' => 'required|url',
                    'annotation' => 'required'
                ]);

                $name = $request->get('name');
                $poster = 'band_img/'.$request->file('film-img')->getClientOriginalName();
                $genre = $request->get('genre');
                $year = $request->get('year');
                $country = $request->get('country');
                $lastfm = $request->get('lastfm');
                $yam = $request->get('yam');
                $instagram = $request->get('instagram');
                $youtube = $request->get('youtube');
                $annotation = $request->get('annotation');

                if (Storage::put($poster, file_get_contents($request->file('band-img')->getRealPath())))
                {
                    Book::create([
                        'name' => $name,
                        'poster' => $poster,
                        'genre' => $genre,
                        'year' => $year,
                        'country' => $country,
                        'lastfm' => $lastfm,
                        'yam' => $yam,
                        'instagram' => $instagram,
                        'youtube' => $youtube,
                        'annotation' => $annotation
                    ]);
                }
            }
        }
        return redirect('admin/interestsedit');
    }

    public function update(Request $request, $item, $id)
    {
        // TODO: update method

        return redirect('admin/interestsedit');
    }

    public function delete($item, $id)
    {
        // TODO: sometimes i try to use dependency injection here

        switch ($item)
        {
            case 'book':
            {
                $book = Book::find($id);
                Storage::delete($book->poster);
                $book->delete();
                break;
            }
            case 'film':
            {
                $film = Film::find($id);
                Storage::delete($film->poster);
                $film->delete();
                break;
            }
            case 'band':
            {
                $band = Band::find($id);
                Storage::delete($band->poster);
                $band->delete();
                break;
            }
        }
        return redirect('admin/interestsedit');
    }
}

<?php

namespace App\Http\Controllers;

use App\Book;
use App\Film;
use App\Band;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class InterestsEditController extends Controller
{
    public function show($item = null, $id = null)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        if (($id != null) && ($item != null))
        {
            switch ($item)
            {
                case 'book':
                {
                    $status = 'update';
                    $films = $bands = null;
                    $books = Book::find($id);
                    break;
                }
                case 'film':
                {
                    $status = 'update';
                    $books = $bands = null;
                    $films = Film::find($id);
                    break;
                }
                case 'band':
                {
                    $status = 'update';
                    $books = $films = null;
                    $bands = Band::find($id);
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
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

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
                break;
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
                    Film::create([
                        'name' => $name,
                        'poster' => $poster,
                        'genre' => $genre,
                        'year' => $year,
                        'country' => $country,
                        'kinopoisk' => $kinopoisk,
                        'annotation' => $annotation
                    ]);
                }
                break;
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
                $poster = 'band_img/'.$request->file('band-img')->getClientOriginalName();
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
                    Band::create([
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
                break;
            }
        }
        return redirect('admin/interestsedit');
    }

    public function update(Request $request, $item, $id)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        switch($item)
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

                $book = Book::find($id);
                $poster_old = $book->poster;

                if (Storage::put($poster, file_get_contents($request->file('book-img')->getRealPath())))
                {
                    $book->update([
                        'name' => $name,
                        'poster' => $poster,
                        'author' => $author,
                        'year' => $year,
                        'livelib' => $livelib,
                        'annotation' => $annotation
                    ]);
                    Storage::delete($poster_old);
                }
                break;
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

                $film = Film::find($id);
                $poster_old = $film->poster;

                if (Storage::put($poster, file_get_contents($request->file('film-img')->getRealPath())))
                {
                    $film->update([
                        'name' => $name,
                        'poster' => $poster,
                        'genre' => $genre,
                        'year' => $year,
                        'country' => $country,
                        'kinopoisk' => $kinopoisk,
                        'annotation' => $annotation
                    ]);
                    Storage::delete($poster_old);
                }
                break;
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
                $poster = 'band_img/'.$request->file('band-img')->getClientOriginalName();
                $genre = $request->get('genre');
                $year = $request->get('year');
                $country = $request->get('country');
                $lastfm = $request->get('lastfm');
                $yam = $request->get('yam');
                $instagram = $request->get('instagram');
                $youtube = $request->get('youtube');
                $annotation = $request->get('annotation');

                $band = Band::find($id);
                $poster_old = $band->poster;

                if (Storage::put($poster, file_get_contents($request->file('band-img')->getRealPath())))
                {
                    $band->update([
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
                    Storage::delete($poster_old);
                }
                break;
            }
        }

        return redirect('admin/interestsedit');
    }

    public function delete($item, $id)
    {
        // TODO: sometimes i try to use dependency injection here

        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';

    protected $fillable = [
        'name', 'poster', 'genre', 'year', 'country', 'kinopoisk', 'annotation'
    ];

    public function poster() {
        return 'storage/'.$this->poster;
    }
}

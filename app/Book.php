<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'name', 'poster', 'author', 'year', 'livelib', 'annotation'
    ];

    public function poster() {
        return 'storage/'.$this->poster;
    }
}

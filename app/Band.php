<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $table = 'bands';

    protected $fillable = [
        'name', 'poster', 'genre', 'year', 'country', 'lastfm', 'yam', 'instagram', 'youtube', 'annotation'
    ];

    public function poster() {
        return 'storage/'.$this->poster;
    }
}

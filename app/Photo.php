<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';

    protected $fillable = [
        'name', 'image', 'mic', 'annotation',
    ];

    public function image() {
        return 'storage/'.$this->image;
    }

    public function mic() {
        return 'storage/'.$this->mic;
    }
}

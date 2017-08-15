<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title', 'image', 'text',
    ];

    public function image() {
        return 'storage/'.$this->image;
    }
}

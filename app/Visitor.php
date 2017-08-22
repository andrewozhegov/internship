<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';

    protected $fillable = ['/', 'aboutme', 'blog', 'contacts', 'interests', 'photos', 'study', 'test'];

    public function getUser ()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function home ()
    {
        return $this['/'];
    }
}

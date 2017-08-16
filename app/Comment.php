<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'text',
    ];

    public function getBlog () {
        return $this->belongsTo('App\Blog', 'blog_id', 'id');
    }

    public function getUser () {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

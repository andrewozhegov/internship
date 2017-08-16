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

    public function getComments () {
        return $this->hasMany('App\Comment', 'blog_id', 'id');
    }

    public function getCommentators () {
        return $this->belongsToMany('App\User', 'comments', 'blog_id', 'user_id')->withTimestamps();;
    }
}

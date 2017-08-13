<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = 'values';

    public function getTests () {
        return $this->hasMany('App\Test', 'value_id', 'id');
    }

    public function getUsers () {
        return $this->belongsToMany('App\User', 'tests', 'value_id', 'user_id');
    }
}

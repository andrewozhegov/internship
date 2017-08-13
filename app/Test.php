<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    public function getUser () {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    public function getValue () {
        return $this->belongsTo('App\Value', 'id', 'value_id');
    }
}

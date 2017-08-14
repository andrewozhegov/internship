<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    public $timestamps = true;

    protected $dateFormat = 'U';

    public function getUser () {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function getValue () {
        return $this->belongsTo('App\Value', 'value_id', 'id');
    }
}

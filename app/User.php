<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getTests ()
    {
        return $this->hasMany('App\Test', 'user_id', 'id');
    }

    public function getRole ()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function getValues ()
    {
        return $this->belongsToMany('App\Value', 'tests', 'user_id', 'value_id')->withTimestamps();;
    }

    public function getComments ()
    {
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }

    public function getVisitor ()
    {
        return $this->hasOne('App\Visitor', 'user_id', 'id');
    }
}

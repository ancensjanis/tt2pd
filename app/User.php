<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','isblocked','isadmin',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function isAdmin() { // 0 - parasts lietotājs, 1 - admins
        return ($this->isadmin == 1);
    }    
    
    public function discussions() {
        return $this->hasMany('App\Discussion');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function keywords() {
        return $this->belongsToMany('App\Keyword');
    }
}

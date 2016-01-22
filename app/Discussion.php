<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['userid', 'isdeleted', 'ispublic', 'title', 'content'];

    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}

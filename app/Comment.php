<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['discussionid', 'userid', 'isdeleted', 'content'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

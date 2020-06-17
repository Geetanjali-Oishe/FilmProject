<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //

    protected $guarded = [];

    public function user() {
        return $this->belongsTo((User::class));
    }

    public function comments() {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }


}

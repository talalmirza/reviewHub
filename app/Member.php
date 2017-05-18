<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function macaddresses()
    {
        return $this->belongsToMany(Macaddress::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function followings()
    {
        return $this->belongsToMany(Reviewer::class);
    }
}

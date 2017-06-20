<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;
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

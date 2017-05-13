<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function tags()
    {
        return $this->hasMany('Tag');
    }

    public function likes()
    {
        return $this->hasMany('Likes');
    }

    public function reviewImages()
    {
        return $this->hasMany('ReviewImage');
    }
}

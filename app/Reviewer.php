<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany('Review');
    }

    public function rank()
    {
        return $this->hasOne('Rank');
    }
}

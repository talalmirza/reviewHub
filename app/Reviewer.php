<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }

    public function followers()
    {
        return $this->belongsToMany(Member::class);
    }
}

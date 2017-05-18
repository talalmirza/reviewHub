<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewImage extends Model
{
    protected $guarded = [];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}

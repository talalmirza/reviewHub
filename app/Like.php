<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function reviewers()
    {
        return $this->hasMany(Reviewer::class);
    }
}

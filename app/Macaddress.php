<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Macaddress extends Model
{
    protected $guarded = [];

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}

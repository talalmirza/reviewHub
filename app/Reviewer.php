<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Reviewer extends Model
{
    protected $guarded = [];


    public function isFollow($id)
    {
        $m = MemberReviewer::where('member_id', Auth::user()->id)
            ->where('reviewer_id', $id)->get();
        return count($m);
    }

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberReviewer extends Model
{
    protected $table = 'member_reviewer';
    protected $guarded = [];
    public $timestamps = false;
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}

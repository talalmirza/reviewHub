<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Review extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;

    protected $dates = ['deleted_at'];

    public function isLiked($id)
    {
        $l = Like::where('review_id', $id)->where('member_id', Auth::user()->id)->get();
        return count($l);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('id','desc');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }
}

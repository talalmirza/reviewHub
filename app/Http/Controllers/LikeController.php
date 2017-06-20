<?php

namespace App\Http\Controllers;

use App\Like;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function like($id)
    {

        Like::create([
            "member_id" => Auth::user()->id,
            "review_id" => $id
        ]);
        return response()->json([Review::find($id)->likes->count()]);
    }


    public function unlike($id)
    {

        Like::where('review_id', $id)->where('member_id', Auth::user()->id)->delete();
        return response()->json([Review::find($id)->likes->count()]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Like $like)
    {

    }

    public function edit(Like $like)
    {

    }

    public function update(Request $request, Like $like)
    {

    }

    public function destroy(Like $like)
    {

    }
}

<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function index($id, Request $request)
    {

        $c = Comment::create([
            "member_id" => Auth::user()->id,
            "review_id" => $id,
            "body" => $request->comment,
        ]);
        return response()->json([
            "body" => $c->body,
            "name" => $c->member->email,
            "time" => date('d M Y h:i', strtotime($c->created_at))
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show(Comment $comment)
    {

    }

    public function edit(Comment $comment)
    {

    }

    public function update(Request $request, Comment $comment)
    {

    }

    public function destroy(Comment $comment)
    {

    }
}

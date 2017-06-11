<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->get();
        return View('posts.index',compact('posts'));

    }

    public function create()
    {

        return view ('admin.create_review');
    }

    public function store(Request $request)

    {

        //Validate Data
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $review = new Review();
        $review->title = $request->title;
        $review->caption = $request->caption;
        $review->body = $request->body;
        $review->category_id = $request->category_id;
        $review->reviewer_id = $request->reviewer_id;

        $review->save();

        //$post = $request->all();
        //Review::create($post);

        return view ('admin.posts');


    }

    public function show(Review $review)
    {

    }

    public function edit(Review $review)
    {

    }

    public function update(Request $request, Review $review)
    {

    }

    public function destroy(Review $review)
    {

    }
}

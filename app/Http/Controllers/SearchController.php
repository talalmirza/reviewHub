<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $reviews = Review::latest()->get();
        $subreviews = Review::latest()->whereIn('reviewer_id', [2,5,6])->get();
//        $tags =
        return View('user.search');
    }
}

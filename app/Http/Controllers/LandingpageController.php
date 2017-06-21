<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Review;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::take(3)->get();
        $reviews = Review::latest()->take(6)->get();
        return view('user.landingpage',compact('reviews','categories'));
    }


}

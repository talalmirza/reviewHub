<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
Use App\Review;
Use App\Category;
Use App\Tag;

class SearchController extends Controller
{
    /**
     * Display a listing of the resourceN
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showSearch(){

        $keyword = Input::get('keyword');

        if (is_null($keyword)){

            $message = 'No results were found for the keyword';

            return view ('user.search',compact('reviews','categories','tags','keyword','message'));

        }

        $reviews = Review::where('title', 'like', '%'.$keyword.'%')->get();


        $categories = Category::where('name', 'like', '%'.$keyword.'%')->get();

        $tags = Tag::with('reviews')->where('name', 'like', '%'.$keyword.'%')->get();



        return view ('user.search',compact('reviews','categories','tags','keyword'));


    }


    public function categorySearch($keyword){

        $categories = Category::where('name', 'like', '%'.$keyword.'%')->get();

        $categoriesid = Category::where('name', 'like', '%'.$keyword.'%')->pluck('id');

        $reviews = Review::where('category_id', '=', $categoriesid)->get();


        return view ('user.category_displayreviews',compact('reviews','categories','keyword'));


    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
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

        $reviews = Review::where('title', 'like', '%'.$keyword.'%')->orderBy('id', 'desc')->get();


        $categories = Category::where('name', 'like', '%'.$keyword.'%')->get();

        $tags = Tag::with('reviews')->where('name', 'like', '%'.$keyword.'%')->orderBy('id', 'desc')->get();



        return view ('user.search',compact('reviews','categories','tags','keyword'));


    }


    public function categorySearch($keyword){

        $categories = Category::where('name', 'like', '%'.$keyword.'%')->get();

        $categoriesid = $categories->pluck('id');

        $reviews = Review::where('category_id', '=', $categoriesid)->orderBy('id', 'desc')->get();


        return view ('user.category_displayreviews',compact('reviews','categories','keyword'));


    }


    public function tagSearch($keyword){

        $tag = Tag::where('name', '=', $keyword)->get();

        $tagid = $tag->pluck('id');

        $reviewids = DB::table('review_tag')->select('review_id')->where('tag_id','=',$tagid)->get()->pluck('review_id');

        $reviews = [];
        foreach ($reviewids->toArray()  as $id){
            array_push($reviews,Review::find($id));
        }

        return view ('user.tag_displayreviews',compact('reviews','$tag','keyword'));


    }

}

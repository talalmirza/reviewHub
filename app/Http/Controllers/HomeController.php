<?php

namespace App\Http\Controllers;

use App\Category;
use App\MemberReviewer;
use App\Review;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $reviews = Review::orderBy('created_at', 'desc')->get();

        //dd(Auth::id());exit;
        $reviewers_sublist = MemberReviewer::select('reviewer_id')->where('member_id','=', Auth::id())->get();
        //dd($reviewers_sublist);exit;

        $subreviews = Review::latest()->whereIn('reviewer_id', $reviewers_sublist)->get();
        //dd($subreviews);exit;

        $tag_ids = DB::table('review_tag')
            ->join('tags', 'tags.id', '=', 'review_tag.tag_id')
            ->select('tag_id')
            ->groupBy('tag_id')
            ->orderBy(DB::raw('count(tag_id)'), 'desc')
            ->take(5)
            ->get()->pluck('tag_id');


        $tag_names = [];
        foreach ($tag_ids->toArray()  as $id){
            array_push($tag_names,Tag::find($id)->name);
        }
$member = Auth::user();


        return view('user.home',compact('reviews','categories','subreviews','tag_names','member'));
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
}

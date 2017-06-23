<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



use App\Review;
use App\Category;
use App\Tag;
use App\Comment;

use Session;
use Purifier;
use Image;


class ReviewController extends Controller
{
    public function index()
    {

        $reviews = Review::where('reviewer_id' , '=' , Session::get('admin')->id)->get();
        $reviewsdeleted = Review::onlyTrashed()->where('reviewer_id' , '=' , Session::get('admin')->id)->get();
        $categories = Category::all();

        return view('admin.posts', compact('reviews', 'reviewsdeleted', 'categories'));

    }


    public function reviewRestore($id)
    {

        Review::onlyTrashed()
            ->where('id', $id)
            ->restore();

        return redirect()->route('review.index');

    }

    public function confirmDelete($id)
    {

        Review::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();

        return redirect()->route('review.index');

    }

    public function showDashboardPosts()
    {

        $reviews = Review::where('reviewer_id' , '=' , Session::get('admin')->id)->orderBy('id', 'desc')->take(5)->get();
        

        return view('admin.dashboard', compact('reviews'));

    }


    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.create_review')->withCategories($categories)->withTags($tags);

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
        $review->reviewer_id = Session::get('admin')->id;

        if ($request->hasFile('imgInp')) {


            $image = $request->file('imgInp');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put($fileName, File::get($image));

            $url = Storage::url($fileName);


            $review->featureimage = $url;

        }
        


        $review->save();


        if ($review) {
            $tagNames = explode(',', $request->post_tags);
            $tagIds = [];

            foreach ($tagNames as $tagName) {
                //$post->tags()->create(['name'=>$tagName]);
                //Or to take care of avoiding duplication of Tag
                //you could substitute the above line as

                $tag = Tag::firstOrCreate(['name' => $tagName]);

                if ($tag) {
                    $tagIds[] = $tag->id;
                }

            }


            $review->tags()->sync($tagIds);
        }

        return redirect()->route('review.index');


    }

    public function show(Review $review)
    {

        $tag_ids= DB::table('review_tag')->where('review_id','=',$review->id)->get()->pluck('tag_id');;

        //dd($tag_ids);exit;

        $tag_names = [];
        foreach ($tag_ids->toArray()  as $id){
            array_push($tag_names,Tag::find($id)->name);
        }

        //dd($tag_names);exit;

        return view('user.reviewarticle',compact('review','tag_names'));
    }


    public function edit($id)
    {

        $review = Review::findorFail($id);

        $categories = Category::all();
        $tags = $review->tags->all();


        return view('admin.edit_review')->withReview($review)->withCategories($categories)->withTags($tags);

    }

    public function update(Request $request, Review $review)
    {


        //Validate Data
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $review->title = $request->title;
        $review->caption = $request->caption;
        $review->body = $request->body;
        $review->category_id = $request->category_id;
        $review->reviewer_id = $request->reviewerid;

        if ($request->hasFile('imgInp')) {


            $image = $request->file('imgInp');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put($fileName, File::get($image));

            $url = Storage::url($fileName);


            $review->featureimage = $url;

        }


        $review->update();


        if ($review) {
            $tagNames = explode(',', $request->post_tags);
            $tagIds = [];

            foreach ($tagNames as $tagName) {
                //$post->tags()->create(['name'=>$tagName]);
                //Or to take care of avoiding duplication of Tag
                //you could substitute the above line as

                $tag = Tag::firstOrCreate(['name' => $tagName]);

                if ($tag) {
                    $tagIds[] = $tag->id;
                }

            }


            $review->tags()->sync($tagIds);
        }

        return redirect()->route('review.index');

    }

    public function destroy(Review $review)
    {

        Review::destroy($review->id);

        $tag_ids = DB::table('review_tag')
            ->select('tag_id')
            ->where('review_id','=',$review->id)
            ->groupBy('tag_id')
            ->get()->pluck('tag_id');

        DB::table('review_tag')->whereIn('tag_id', $tag_ids)->delete();

        return redirect()->route('review.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



use App\Review;
use App\Category;
use App\Tag;

use Session;
use Purifier;
use Image;



class ReviewController extends Controller
{
    public function index()
    {

        $review = Review::latest()->get();
        return View('admin.posts',compact('review'));

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
        $review->reviewer_id = 1;

        if ($request->hasFile('imgInp')) {


            $image      = $request->file('imgInp');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put($fileName, File::get($image));

            $url = Storage::url($fileName);


            $review->featureimage=$url;

        }


        $review->save();



        if($review)
        {
            $tagNames = explode(',', $request->post_tags);
            $tagIds = [];

            foreach($tagNames as $tagName)
            {
                //$post->tags()->create(['name'=>$tagName]);
                //Or to take care of avoiding duplication of Tag
                //you could substitute the above line as

                $tag = Tag::firstOrCreate(['name'=>$tagName]);

                if($tag)
                {
                    $tagIds[] = $tag->id;
                }

            }


            $review->tags()->sync($tagIds);
        }

        return view ('admin.posts');


    }

    public function show(Review $review)
    {

        return view('user.reviewarticle',compact('review'));
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

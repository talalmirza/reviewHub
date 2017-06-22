<?php

use Illuminate\Support\Facades\View;

//User Side Routes

Route::get('/', 'LandingpageController@index');

Route::post('/reviewer', 'ReviewerController@store');
Route::post('/register', 'AuthenticationController@register');
Route::post('/login', 'AuthenticationController@login');
Route::get('/logout', 'AuthenticationController@logout');
Route::get('/auth/facebook', 'SocialController@login');
Route::get('auth/facebook/callback', 'SocialController@register');
Route::get('/auth/google', 'SocialController@glogin');
Route::get('auth/google/callback', 'SocialController@gregister');

Route::get('/like/review/{id}', 'LikeController@like');
Route::get('/unlike/review/{id}', 'LikeController@unlike');
Route::get('/comment/review/{id}', 'CommentController@index');


Route::get('user/{username}', function ($username) {
    $reviewer = \App\Reviewer::where('username', $username)->first();
    $reviews = \App\Review::where('reviewer_id','=',$reviewer->id)->orderBy('created_at', 'desc')->take(4)->get();

    return view('user.user_reviewerprofile', compact('reviewer','reviews'));
});

Route::get('/get/reviews', function () {
    $r = \App\Review::orderBy('created_at', 'desc')->get();
    $view = View::make('user.partials.reviews', ['reviews' => $r]);
    return response()->json(["view" => $view->render()]);
});

Route::get('follow/{username}', function ($username) {

    $m = \App\Reviewer::where('username', $username)->first();
    \App\MemberReviewer::create([
        "member_id" => \Illuminate\Support\Facades\Auth::user()->id,
        "reviewer_id" => $m->id,
    ]);
    return redirect()->back();
});
Route::get('unfollow/{username}', function ($username) {
    $m = \App\Reviewer::where('username', $username)->first();
    \App\MemberReviewer::where('member_id', \Illuminate\Support\Facades\Auth::user()->id)
        ->where('reviewer_id', $m->id)->delete();
    return redirect()->back();
});

Route::get('/home', 'HomeController@index');
Route::get('home##livefeed', 'HomeController@index');
Route::get('home#subslist', 'HomeController@index');
Route::get('home#category_list', 'HomeController@index');

Route::get ('/search','SearchController@showSearch');
Route::get ('/search/category/{keyword}','SearchController@categorySearch');
Route::get ('/search/tag/{keyword}','SearchController@tagSearch');

Route::get ('/profile/{username}', 'MemberProfileController@edit')->name('profileedit');
Route::POST ('/profile/{username}', 'MemberProfileController@update');

Route::post('/like', [
    'uses' => 'ReviewController@likeReview',
    'as' => 'like'
]);


Route::get('contact', function () {
    return view('user.contact');
});


//Admin Side Routes

Route::get('secretdoor', function () {
    return view('admin.secretdoor');
});

Route::get('reviewerapply', function () {

   return view ('user.reviewerapply');
});

Route::group(['middleware' => 'checkadmin'],function(){

    Route::get('/dashboard', 'ReviewController@showDashboardPosts');

    Route::get ('/reviewer/profile/{username}', 'ReviewerProfileController@edit')->name('profileedit');
    Route::POST ('/reviewer/profile/{username}', 'ReviewerProfileController@update');

    Route::get('restore/{id}', 'ReviewController@reviewRestore');
    Route::get('delete/{id}', 'ReviewController@confirmDelete');
    Route::get('/reviewer/logout', 'ReviewerController@logout');

    Route::get('/followers', 'ReviewerController@get_followers');
    Route::get('/follower/delete/{id}', 'ReviewerController@delete');

});

Route::post('/reviewer/login', 'ReviewerController@login');

Route::resource('/review', 'ReviewController');

?>




<?php

use Illuminate\Support\Facades\View;

Route::get('/', function () {

    return view('user.landingpage');
});

// Ahmed Butt
Route::post('/reviewer', 'ReviewerController@store');
Route::get('/reviewer/logout', 'ReviewerController@logout');
Route::post('/reviewer/login', 'ReviewerController@login');
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
    $m = \App\Reviewer::where('username', $username)->first();
    return view('user.user_profile')->with('reviewer', $m);
});

Route::get('/get/reviews', function () {
    $r = \App\Review::all();
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

Route::get('/followers', 'ReviewerController@get_followers');
Route::get('/follower/delete/{id}', 'ReviewerController@delete');


// ---

Route::get('/home', 'HomeController@index');

Route::get('/search', 'SearchController@index');

Route::get('/search', function () {


    return view('user.search');


});


Route::get('/review', function () {


    return view('user.reviewarticle');


});


Route::get('profile', function () {


    return view('user.profile');


});


Route::get('dashboard', function () {


    return view('admin.dashboard');


});

Route::get('home##livefeed', 'HomeController@index');
Route::get('home#subslist', 'HomeController@index');
Route::get('home#category_list', 'HomeController@index');


Route::get('posts', function () {


    return view('admin.posts');


});

Route::get('settings', function () {


    return view('admin.settings');


});


Route::get('secretdoor', function () {


    return view('admin.secretdoor');


});


Route::get('contact', function () {


    return view('user.contact');


});

Route::get('newpost', function () {


    return view('admin.newpost');


});

Route::get('reviewerapply', function () {


    return view('user.reviewerapply');


});


Route::get('restore/{id}', 'ReviewController@reviewRestore');

Route::get('delete/{id}', 'ReviewController@confirmDelete');

Route::get('/dashboard', 'ReviewController@showDashboardPosts');

Route::post('/like', [
    'uses' => 'ReviewController@likeReview',
    'as' => 'like'
]);


Route::resource('/review', 'ReviewController');


?>




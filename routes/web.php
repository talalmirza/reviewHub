<?php

Route::get('/', function(){

    return view('user.landingpage');
});


Route::get ('/home' , 'HomeController@index');

Route::get ('/search' , 'SearchController@index');

Route::get ('/search' , function(){


    return view ('user.search');


});


Route::get ('/review' , function(){


    return view ('user.reviewarticle');


});


Route::get ('profile' , function(){


    return view ('user.profile');


});



Route::get ('dashboard' , function(){


    return view ('admin.dashboard');


});

Route::get ('home##livefeed' ,'HomeController@index');
Route::get ('home#subslist' ,'HomeController@index');
Route::get ('home#category_list' ,'HomeController@index');


Route::get ('posts' , function(){


    return view ('admin.posts');


});

Route::get ('settings' , function(){


    return view ('admin.settings');


});



Route::get ('secretdoor' , function(){


    return view ('admin.secretdoor');


});


Route::get ('contact' , function(){


    return view ('user.contact');


});

Route::get ('newpost' , function(){


    return view ('admin.newpost');


});

Route::get ('reviewerapply' , function(){


    return view ('user.reviewerapply');


});


Route::get ('restore/{id}','ReviewController@reviewRestore');

Route::get ('delete/{id}','ReviewController@confirmDelete');

Route::get ('/dashboard','ReviewController@showDashboardPosts');

Route::post('/like', [
    'uses' => 'ReviewController@likeReview',
    'as' => 'like'
]);


Route::resource ('/review','ReviewController');






?>




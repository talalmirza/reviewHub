<?php

Route::get('/', function(){

    return view('user.landingpage');
});


Route::get ('/home' , 'CategoryController@index');



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


Route::get ('home#category_list' ,'CategoryController@index');

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



Route::resource ('/review','ReviewController');






?>




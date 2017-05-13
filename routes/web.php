<?php

Route::get('/', function(){

    return view('index');
});


Route::get ('/livefeed' , function(){


    return view ('livefeed');


});



Route::get ('/profile' , function(){


    return view ('profile');


});



Route::get ('categories' , function(){


    return view ('categories');


});

?>




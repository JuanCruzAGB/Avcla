<?php
    use Illuminate\Support\Facades\Route;
    
// * WebController - Controls the web in general.
    Route::get('/', 'WebController@home')->name('web.home');
    
    Route::get('/inicio', 'WebController@home')->name('web.home');

    Route::get('/proximamente', 'WebController@comingsoon')->name('web.comingsoon');
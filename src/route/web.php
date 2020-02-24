<?php


Route::group(['namespace'=> 'Oppong\Contact\Http\Controllers'], function() {
  Route::get('/contact', 'ContactController@contact')->name('contact');
  Route::post('contact', 'ContactController@send');
});

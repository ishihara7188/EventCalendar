<?php

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/events', 'EventController');
    Route::get('/addevent', 'EventController@add');
    Route::get('/displayevent/{id}', 'EventController@show');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::redirect('/', '/events'); // /に来たら/eventsに飛ばす。第3引数にHTTPステータスコードを指定可能

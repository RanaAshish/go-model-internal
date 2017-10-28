<?php



Route::get('/blog','BlogController@index')->name('list-post');

Route::get('/blogs/post/{id}','BlogController@singlePost')->name('single-post');
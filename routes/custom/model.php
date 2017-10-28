<?php


Route::get('/model/space','ModelController@profile')->name('model-profile');
Route::get('/model/register','ModelController@register')->name('model-register');

Route::get('/model/prize','ModelController@model_prize')->name('model-prize');
//Route::get('/blogs/post/{id}','BlogController@singlePost')->name('single-post');
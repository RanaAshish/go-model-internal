<?php

Route::group(['namespace' => 'Model', 'prefix' => 'model'], function () {
	/**
	 * Register
	 */
	Route::get('/register',['as' => 'model.model.getRegister', 'uses' => 'ModelController@getRegister']);
	Route::post('/register',['as' => 'model.model.postRegister', 'uses' => 'ModelController@postRegister']);


	Route::group(['middleware' => ['auth', 'role:admin|model']], function () {
		Route::get('/', function () {
			return view('model.index');
		});

		Route::get('/space',['as' => 'model.model.profile', 'uses' => 'ModelController@profile']);
		Route::put('/{type}/update',['as' => 'model.model.update', 'uses' => 'ModelController@update']);
	});

});
<?php

Route::get( '/', function () {
	return redirect( url( App::getLocale() ) );
} );

/*
* Auth
*/
Auth::routes();

Route::group( [ 'prefix' => '{language}', 'middleware' => 'locale' ], function () {

	require_once __DIR__ . '/custom/blog.php';

	require_once __DIR__ . '/custom/model.php';

	require_once __DIR__ . '/custom/partner.php';


} );

Route::get( '/confirm_account/{id}', 'PartnerController@confirm_account' );



<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::prefix('{language?}')->group(function ($language) {


	//App::setLocale($language);
	/** Route Partial Map  **/

	$partials = [
		'blog',
		'model',
		'partner'
	];
	

   	foreach ($partials as $partial) {

	    $file = __DIR__.'/custom/'.$partial.'.php';

	    if ( ! file_exists($file))
	    {
	        $msg = "Route partial [{$partial}] not found.";
	        throw new \Illuminate\Filesystem\FileNotFoundException($msg);
	    }

	    require_once $file;
	}

	// Route::get('/blog','BlogController@index')->name('single-post-blog');
});
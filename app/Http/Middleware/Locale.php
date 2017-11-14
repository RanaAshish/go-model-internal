<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Locale {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 *
	 * @return mixed
	 */
	public function handle( $request, Closure $next ) {
		// set locale for project
		$path = $request->path();
		$locale = substr( $path, 0, 2 );
		if (strlen($path) > 1 && array_key_exists($locale, getListLanguage())
		    && (substr( $path, 2, 1 ) == '' || substr( $path, 2, 1 ) == '/') ) {
			App::setLocale($locale);
		}

		return $next( $request );
	}
}

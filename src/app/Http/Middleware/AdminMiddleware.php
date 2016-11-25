<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{

    public function handle($request, Closure $next) {

	    if (isset($_COOKIE['admin'])) {
		    return $next($request);
	    } else {
		    return redirect()->route('admin.login');
	    }

    }
}

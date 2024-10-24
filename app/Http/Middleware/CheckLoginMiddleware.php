<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!\Auth::check()) {
            // Redirect to login route if not authenticated
            return redirect()->route('login');
        }
        return $next($request);
    }
}

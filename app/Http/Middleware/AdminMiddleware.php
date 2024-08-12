<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user has an 'admin' role
        if (Auth::check() && Auth::user()->role !== 'admin') {
            // If the user is not an admin, redirect to the home page
            return redirect('/');
        }

        // If the user is an admin, allow the request to proceed
        return $next($request);
    }
}

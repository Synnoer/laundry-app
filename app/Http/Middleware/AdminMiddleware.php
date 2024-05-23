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
        // Check if the user is authenticated and has the admin role (role_id = 1)
        if (Auth::check() && Auth::user()->role_id == 1) {
            return $next($request);
        }

        // Redirect to home page or show 403 forbidden if the user is not an admin
        return redirect('/')->with('error', 'You do not have admin access.');
    }
}

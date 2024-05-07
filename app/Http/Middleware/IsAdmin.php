<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Check if the user is an admin
            if ($user->user_type === 'admin') {
                return $next($request);
            }
        }

        // If not an admin, redirect with an error message
        return redirect('/')->with('error', 'You are not authorized to access this page.');
    }
}

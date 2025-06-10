<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $route = $request->route()->getName();

        // Check if user is authenticated using Laravel's built-in method
        if (!Auth::check()) {
            // If not authenticated and trying to access any route other than login or register
            if (!in_array($route, ['login.form', 'register.form'])) {
                return redirect()->route('login.form');
            }
        } else {
            // If the user is logged in and trying to access login or register routes
            if (in_array($route, ['login.form', 'register.form'])) {
                return redirect()->route('add.task');
            }
        }

        return $next($request);
    }
}

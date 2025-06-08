<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class authUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $route = $request->route()->getName();

        if(!Session::get('user_name') && !($route == 'register.form' || $route == 'login.form')){
            return redirect()->route('login.form');
        }
        else if(!Session::get('user_name') && ($route == 'register.form' || $route == 'login.form')){
            return $next($request);
        }
        else if(Session::get('user_name') && ($route == 'register.form' || $route == 'login.form')){
                        return redirect()->route('home');
        }
        return $next($request);

    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class user_url_checking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('email')) {
            return redirect('/');
        }
        else{
            return $next($request);
        }    
    }
}

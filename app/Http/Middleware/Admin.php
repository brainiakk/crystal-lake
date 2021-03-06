<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (\Auth::user()) {
            # code...
            if (\Auth::user()->level >= 1) {
                return $next($request);
            }

            return redirect('/');
        } else {
            # code...
            return redirect('/login');
        }
    }
}

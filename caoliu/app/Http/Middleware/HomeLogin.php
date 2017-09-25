<?php

namespace App\Http\Middleware;

use Closure;

class HomeLogin
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
        if(!session('homeUser'))
        {
            return redirect('/home/login')->with('errors','没有登录，请登录');
        }
        return $next($request);
    }
}

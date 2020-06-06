<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class CustomAuthCheck

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

        if(!auth()->guard('superadmin')->check())
        {
            Session::flash('error-msg', 'Please login first');
            return redirect()->route('superadmin-login');
        }

        return $next($request);
    }
}

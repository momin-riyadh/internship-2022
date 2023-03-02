<?php

namespace App\Http\Middleware;

use Closure;

class checkAdminAccess
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
        if(!session()->has('adminData')){
            return redirect('adminlogin');
        }
        return $next($request);
    }
}

<?php

namespace skulyv\Http\Middleware;

use Closure;

class RoleMiddleware
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
        if($request->role = 0)
        {
            return redirect('/home');
        }else
        {
            return redirect('/admin');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class NewMiddleware
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
        if(strlen($request->areaName) <3)
        {
            return redirect('areapage')->with('status','Name Must Be greater then 3');
        }
        return $next($request);
    }
}

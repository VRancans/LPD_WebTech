<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use function redirect;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!(Auth::check() && Auth::user()->isAdmin()))
        {
            return redirect('home')->withErrors('You are not allowed to do this');
        }
        return $next($request);
    }
}

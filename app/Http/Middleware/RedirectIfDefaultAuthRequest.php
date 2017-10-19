<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfDefaultAuthRequest
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
        if ($request->isMethod('get') & ($request->is('register')  || $request->is('login'))) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}

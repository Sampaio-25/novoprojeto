<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::guard($guards)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
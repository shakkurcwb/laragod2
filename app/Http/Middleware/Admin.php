<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (!$request->user()->is_admin)
        {
            return redirect('/home');
        }

        return $next($request);
    }
}

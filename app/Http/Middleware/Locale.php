<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    public function handle($request, Closure $next)
    {
        if (!empty($request->user()->meta->language))
        {
            $request->setLocale(config('app.locale', 'en'));
        }

        return $next($request);
    }
}

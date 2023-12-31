<?php

namespace App\Http\Middleware;

use Closure;

class NotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->isNotAdmin()) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}

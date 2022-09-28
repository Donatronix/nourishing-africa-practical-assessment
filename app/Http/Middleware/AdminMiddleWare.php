<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}

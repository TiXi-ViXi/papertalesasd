<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmailCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    $userEmail = auth()->user()->email;

    if ($userEmail === 'hello@gmail.com') {
        return $next($request);
    }

    return redirect()->route('unknown'); // Redirect to another route if the condition is not met
}
}

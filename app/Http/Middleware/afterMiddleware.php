<?php

namespace App\Http\Middleware;

use Closure;

class afterMiddleware
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
        $responce = $next($request);

        echo '<br/>'.'after';

        return $responce;
    }
}

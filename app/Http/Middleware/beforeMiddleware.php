<?php

namespace App\Http\Middleware;

use Closure;

class beforeMiddleware
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
        // Perform action       //先執行任務  
        echo 'before'.'<br/>';
        return $next($request); //這裡才處理 request
    }
}

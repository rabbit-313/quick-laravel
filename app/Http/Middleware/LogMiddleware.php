<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next){
        file_put_contents(
            '/Users/raivc/Documents/quick-laravel/access.log',
            date('Y-m-d H:i:s') . '\n',
            FILE_APPEND
        );
        $response = $next($request);

        // $response->setContent(
        //     mb_strtoupper($response->content())
        // );
        return $response;
    }
}

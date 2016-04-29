<?php

namespace App\Http\Middleware;

use Closure;
use Response;

class CheckQueryString
{
    public function __construct()
    {
        // if you need to inject dependencies or something
    }

    public function handle($request, Closure $next)
    {
        if ($request->query('password') == 'tutsplus') {
            $response = $next($request);

            $response->setContent('content has been overwritten');

            return $response;
        }

        return Response::make('password was incorrect', 401);
    }
}

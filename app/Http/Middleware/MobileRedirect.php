<?php

namespace App\Http\Middleware;

use Closure;

class MobileRedirect
{
    /**
     * MiddleWare до
     */
    public function handle($request, Closure $next)
    {
        // if mobile -> redirect
        if ($request->mobile == '1') {
            return redirect('cvs/mobile/add');
        }
        return $next($request);
    }

    /**
     * MiddleWare после
     */
    /*public function handle($request, Closure $next)
    {
        $response = $next($request);

        // your custom logic goes here

        return $response;
    }*/
}

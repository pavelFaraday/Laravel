<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // all middleware logic goes here - all the validation and other stuff. If our validation succeeds, let's say the if the validation gets true, then we will return our request to next(). Otherwise, if our validation is false, then we will return our user or redirect our user to anywhere we like: It can be a root page or we can show a view page 

        return $next($request);
    }
}

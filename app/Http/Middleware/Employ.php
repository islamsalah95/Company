<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Employ
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $authUserId=Auth::user()->department;
        if($authUserId==2 || $authUserId==3 )
        {
        return $next($request);
        }
        else
        {
        return abort(401,"not Authorized");
        }
    }
}
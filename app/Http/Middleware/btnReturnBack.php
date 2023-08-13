<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class btnReturnBack
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $respon = $next($request);
        $respon->headers->set('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate');
        $respon->headers->set('Pragma', 'no-cache');
        $respon->headers->set('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        return $respon;
    }
}

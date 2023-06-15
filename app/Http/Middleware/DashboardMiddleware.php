<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $current_route = $request->route()->getName();
        if(!Session::has('AdminId') && !Session::has('AdminToken')){

            return redirect()->route('admin.login');
        }
        if(!getLogInUserPermission($current_route)){

            return abort(403, 'Not Access This Page');
        }

        return $next($request);
    }
}

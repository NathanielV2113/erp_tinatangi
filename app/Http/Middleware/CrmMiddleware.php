<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CrmMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            /** @var App\Models\User */
            $user = Auth::user();
            if($user->hasRole(['crm', 'super-admin'])){
                return $next($request);
            }
            abort(403, 'Unauthorized action.');
        }
        abort(401);
    }
}

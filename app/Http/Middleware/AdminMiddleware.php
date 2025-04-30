<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
            if($user->hasRole(['super-admin', 'admin'])){
                return $next($request);
            }
            if($user->hasRole(['hrm'])){
                return redirect('/hrm');
            }
            if($user->hasRole(['frm'])){
                return redirect('/frm');
            }
            if($user->hasRole(['scm'])){
                return redirect('/scm');
            }
            if($user->hasRole(['mfr'])){
                return redirect('/mfr');
            }
            if($user->hasRole(['crm'])){
                return redirect('/crm');
            }
            if($user->hasRole(['employee'])){
                return redirect('/employee');
            }
            if($user->hasRole(['user'])){
                return redirect('/user');
            }
            abort(403, 'Unauthorized action.');
        }
        abort(401);
    }
}

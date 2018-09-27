<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch (Auth::user()->user_type) {
                case 'admin':
                    return redirect();
                    break;
                case 'client':
                    return redirect(route('get.client-account'));
                    break;
                case 'therapist':
                    return redirect(route('get.therapist-account'));
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        return $next($request);
    }
}

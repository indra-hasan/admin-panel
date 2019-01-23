<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PermisionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* If dont have session */
        // if(!Auth::check()){
        //     return redirect('/login');
        // }

        /* Get detail session */
        $user=Auth::user();
        if ($user->is_admin !== 1) {
            /* Cek has role */
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
        // check if the user is administrator 
        if (auth()->check()) {
             if (in_array(auth()->user()->email,config('app.administrators')))
             {
            return $next($request);
        }else{
            dd('no access');
        }
        }else{
            dd('please log in');
        }
    }
}

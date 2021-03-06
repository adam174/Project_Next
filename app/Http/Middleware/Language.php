<?php

namespace App\Http\Middleware;

use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        //check the sessions for the language value
         if(\Session::has('locale'))
            {
                \App::setlocale(\Session::get('locale'));
            }
                return $next($request);

    }
}

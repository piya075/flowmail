<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckAuthen
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
        if(Session::get('member')!='admin'){
            return redirect('/login')->withErrors(['error'=>['Please Login']])->withInput();
        }
        return $next($request);
    }
}

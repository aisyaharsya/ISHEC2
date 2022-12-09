<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        //jika level user yang masuk tidak sesuai dengan level yang di harapkan dari variabel $level maka tidak bisa masuk

        if (in_array(Auth::user()->level,$levels)) {
            # code...
            return $next($request);
        }
        if(Auth::user()->level == 0){
            return redirect('/ad');
        }
        if(Auth::user()->level == 1){
            return redirect('/doc');
        }
       
    }
}
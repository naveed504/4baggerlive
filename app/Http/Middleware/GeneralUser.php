<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if (!Auth::check()) {
            return $next($request);
        }elseif(Auth::check()) {
            $role =  Auth::user();
            if($role->type == 5) {
                return $next($request);
            }elseif($role->type == 1 || $role->type == 2 || $role->type == 3 || $role->type == 4) {
                return redirect()->back();
            }     
            return redirect()->back();      
        } else {
            return redirect()->back();
        }
      
    }
}

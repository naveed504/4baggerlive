<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class RoleChecker
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

        $role = Auth::check() ? Auth::user() : null;
        if ($role->type != 1) {
            session()->flash('danger', 'This user is not an Admin ');
            return redirect()->back();
        }
        return $next($request);
    }
}

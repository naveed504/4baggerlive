<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamRole
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
        if ($role->type != 3) {
            session()->flash('danger', 'This user is not a Coach of Team ');
            return redirect()->back();
        }
        return $next($request);
    }
}

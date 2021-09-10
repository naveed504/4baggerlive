<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectorRole
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
        if ($role->type != 2) {
            session()->flash('danger', 'This user is not a Tournament Director');
            return redirect()->back();
        }
        if(Auth::check() && Auth::user()->type == 2 && Auth::user()->status == 0) {
            toastr()->error("Your account is not approved by admin. Please try again later");
            Auth::logout();
            return redirect('/');
        }
        return $next($request);
    }
}

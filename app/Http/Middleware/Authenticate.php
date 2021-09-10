<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if ($request->segment(1) == 'director') {
                toastr()->error("Login with director account to access this route");
            } elseif ($request->segment(1) == 'team') {
                toastr()->error("Login with team account to access this route");
            } elseif ($request->segment(1) == 'player') {
                toastr()->error("Login with player account to access this route");
            } else {
                toastr()->error("Login with admin account to access this route");
            }
            return route('login');
        }
    }
}

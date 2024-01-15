<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AdminAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    protected function authenticate($request, array $guards)
    {
        if($this->auth->guard('admin')->user()){
            if ($this->auth->guard('admin')->user()->role == 2) {
//            dd($this->auth->guard('admin')->user()->role );
                return $this->auth->shouldUse('admin');
            }
        }

        $this->unauthenticated($request,['admin'] );
    }
}

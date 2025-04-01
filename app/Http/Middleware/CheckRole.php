<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->role === 'admin' || Auth::user()->role === 'empleador')) {
            return $next($request);
        }

        return redirect('/');
    }
}

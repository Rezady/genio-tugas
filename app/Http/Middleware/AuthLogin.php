<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use App;
// use App\Staff;
// use App\Users;


class AuthLogin
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

        if (!$request->session()->has('nama')) {
            return redirect('/login');
        }


        return $next($request);
    }
}

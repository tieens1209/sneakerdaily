<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            //Tài khoản có role là admin hoặc nhân viên
            if(Auth::user()->role == 1 || Auth::user()->role == 2){
                return $next($request);
            }
        }
        return redirect()->route('adminLogin');
    }
}
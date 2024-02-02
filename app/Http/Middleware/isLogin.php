<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // cek kalau di fitur auth ada history login, diperbolehkan akses
        if(Auth::check()) {
            return $next($request);
        }
        // kalau gaada history login bakal dibalikin ke halaman login dengan pesan error
        return redirect()->route('login')->with('notAllowed','Silahkan login terlebih dahulu!');
    }
}


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna adalah admin
        if (Auth::check() && Auth::user()->role == 'Admin') {
            // Redirect ke halaman lain atau tampilkan pesan kesalahan
            return redirect('/admin')->with('error', 'Anda tidak diizinkan mengakses halaman ini.');
        }

        return $next($request);
    }
}

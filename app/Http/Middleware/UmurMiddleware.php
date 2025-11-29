<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('age'); //nilai umur

        if ($umur >= 18) {
            return $next($request); //memberikan izin pada route yang dituju
        }

        return redirect()->route('umur.form')
        ->with('fail', 'Kamu belum cukup umur');


    }
}

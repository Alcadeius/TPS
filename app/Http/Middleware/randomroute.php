<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class randomroute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $referer = $request->headers->get('referer');

        // Jika referer tidak diharapkan (misalnya, tidak ada atau bukan halaman yang diharapkan)
        if (!$referer === false) {
            return redirect()->back(); // Ganti 'expected_route' dengan nama rute yang ingin Anda alihkan
        }

        return $next($request);
    }
}

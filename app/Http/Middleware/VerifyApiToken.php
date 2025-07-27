<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = checkAndRefreshToken(); // Kita bisa pakai helper yang tadi dibuat

        if (!$token) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
            return redirect()->route('login')->withErrors(['status' => 'Sesi Anda telah berakhir.']);
        }

        // Jika token valid, lanjutkan request ke controller
        return $next($request);
    }
}

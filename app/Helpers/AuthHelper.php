<?php

use Illuminate\Support\Facades\Http;

if (!function_exists('checkAndRefreshToken')) {
    /**
     * Checks if the API token is valid and refreshes it if expired.
     * Returns the token array on success, false on failure.
     *
     * @return array|false
     */
    function checkAndRefreshToken()
    {
        $token = session('api_token');

        if (!$token) {
            return false; // Indicates user is not logged in
        }

        // Cek jika token expired
        $response = Http::post(env('API_BASE_URL') . '/auth/check-token', [
            'token' => $token['accessToken'],
        ]);

        // Jika pengecekan gagal atau token expired
        if (!$response->successful() || $response->json()['data']['isExpired'] == true) {
            // Lakukan refresh token
            $refreshResponse = Http::post(env('API_BASE_URL') . '/auth/refresh-token', [
                'token' => $token['refreshToken'],
            ]);

            // Jika refresh gagal, maka sesi benar-benar berakhir
            if (!$refreshResponse->successful()) {
                session()->forget('api_token'); // Hapus sesi lama
                return false;
            }

            // Jika berhasil, simpan token baru ke session
            $newToken = $refreshResponse->json()['data'];
            session(['api_token' => $newToken]);

            // Kembalikan token baru
            return $newToken;
        }

        // Jika token masih valid, kembalikan token lama
        return $token;
    }
}
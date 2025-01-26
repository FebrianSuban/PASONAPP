<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {

            $response = Http::post('http://127.0.0.1:1337/api/userapps', [
                'identifier' => $request->email,
                'password' => $request->password,
            ]);

            if ($response->successful()) {
                $data = $response->json();


                session(['jwt' => $data['jwt']]);
                session(['user' => $data['user']]);


                return redirect()->route('dashboard')->with('success', 'Login berhasil!');
            } else {
                $error = $response->json()['error']['message'] ?? 'Email atau kata sandi salah';
                return back()->withErrors(['login' => $error]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['login' => 'Gagal menghubungi server.']);
        }
    }
}

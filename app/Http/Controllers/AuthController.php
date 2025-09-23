<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function ShowLoginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Validasi input login + captcha
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->profile) {
            return redirect()->route('index')->with('success', 'Selamat datang kembali!');
            }
            return redirect()->route('profile')->with('info', 'Silakan lengkapi profil Anda terlebih dahulu.');
        }

        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda berhasil logout!');
    }
}

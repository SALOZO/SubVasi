<?php

namespace App\Http\Controllers;

use indonesia;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
    public function registerCheck(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:15',
        ]);

        // Simpan data user ke database (menggunakan model User)
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telp' => $request->phone,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}

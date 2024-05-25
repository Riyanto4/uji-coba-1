<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/');
        } else {
            // Jika autentikasi gagal
            return redirect()->route('login')->with('error', 'Username atau password salah.');
        }
    }
    
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
            // Sesuaikan validasi sesuai kebutuhan Anda
        ]);

        // Membuat user baru
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            // Sesuaikan atribut lainnya sesuai kebutuhan Anda
        ]);

        // Login setelah registrasi
        Auth::login($user);

        return redirect('/');
    }

    // Menangani proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

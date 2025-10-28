<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Login sahypasyny görkez.
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Ulanyjyny girmek (Login).
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Girensoň admin paneline ugrat.
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Maglumatlar ýalňyş.'])->onlyInput('email');
    }

    // Ulanyjyny hasabyndan çykar (Logout).
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

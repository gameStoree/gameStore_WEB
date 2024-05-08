<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function index()
    {
        return view('login.index');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => "Email harus diisi",
            'email.email' => "Format email tidak valid",
            'password.required' => "Password harus diisi",
        ]);

        $cekLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($cekLogin)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard.index');
            } else if (Auth::user()->role == 'worker') {
                return redirect()->route('dashboardWorker.index');
            } else if (Auth::user()->role == 'customer') {
                // Tindakan untuk role 'customer' di sini
            } else {
                return redirect('/')->withErrors('Email dan password yang anda masukkan tidak sesuai')->withInput();
            }
        } else {
            return redirect('/')->withErrors('Email dan password yang anda masukkan tidak sesuai')->withInput();
        }
    }

    function tampilanRegister()
    {
        return view('login.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

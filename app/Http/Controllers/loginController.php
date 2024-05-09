<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:30',
            'email' => 'required|max:30',
            'password' => 'required|max:30',
            'no_hp' => 'required|max:13',
            'role' => 'required|max:20',
        ]);

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()->withErrors(['confirm_password' => 'Password dan konfirmasi password harus sama.'])->withInput();
        }

        $validatedData['password'] = Hash::make($request->password);
        User::create($validatedData);
        return redirect()->route('login')->with('success', 'Akun anda berhasil didaftarkan');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

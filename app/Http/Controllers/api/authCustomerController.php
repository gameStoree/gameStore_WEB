<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthCustomerController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'nama_lengkap' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required',
    ]);
    // $id_baru = Str::uuid();
    // Membuat ID baru
    // $tanggal_sekarang = Carbon::now()->format('Ymd'); // Format tanggal sekarang (misal: 20220501)
    // $id_terakhir = User::latest()->first(); // Mendapatkan record terakhir dari tabel user
    // $nomor_urut = $id_terakhir ? (int) substr($id_terakhir->id, -3) + 1 : 1; // Mendapatkan nomor urut berikutnya
    // $nomor_urut_format = str_pad($nomor_urut, 3, '0', STR_PAD_LEFT); // Format nomor urut menjadi 3 digit dengan leading zero
    // $id_baru = 'US' . $tanggal_sekarang . $nomor_urut_format; // Gabungkan semua komponen untuk membuat ID baru

    // Membuat objek User baru
    $user = new User([
        // 'id' => $id_baru,
        'nama_lengkap' => $request->nama_lengkap,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
        'role' => 'customer',
    ]);
    $user->save();

    return response()->json(['message' => 'success', 'data' => $user], 201);
}


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['message' => 'success', 'user' => $user, 'token' => $token], 200);
        } else {
            return response()->json(['message' => 'Login gagal'], 401);
        }
    }

    public function getUser(Request $request)
    {
        return response()->json(['user' => $request->user()]);
    }

    public function me()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(['message' => 'success', 'data' => $user], 200);
    }


    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json(['message' => 'success'], 200);
    }

    public function getData()
    {
        $data = User::all();
        return response()->json($data);
    }
}

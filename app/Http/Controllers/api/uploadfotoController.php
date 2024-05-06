<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UploadFotoController extends Controller
{
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'foto_user' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload foto user
        $foto_user = $request->file('foto_user')->store('foto_user');

        // Simpan path atau nama file foto user ke database (di sini diasumsikan bahwa pengguna sudah masuk)
        $user = auth()->user();
        $user->foto_user = $foto_user;
        $user->save();

        return response()->json(['message' => 'success', 'data' => $foto_user], 200);
    }
}

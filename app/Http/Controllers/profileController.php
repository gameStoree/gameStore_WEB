<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('adminDev.profileAdmin.index', [
            'judul' => 'PROFILE ADMIN',
            'user' => $user
        ]);
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:30',
            'email' => 'required|max:30',
            'password' => 'required|max:30',
            'no_hp' => 'required|max:30',
            'alamat' => 'required|max:30',
            'foto_user' => 'image|max:2048',
            'role' => 'required|in:admin,worker,customer', 
        ]);

        if ($request->hasFile('foto_user')) {
            $file = $request->file('foto_user');
            $fileName = $file->getClientOriginalName();
            $filePath = 'foto-worker/' . $fileName;
            $filePathStorage = 'public/foto-worker/' . $fileName;
            Storage::put($filePathStorage, file_get_contents($file));
            $validatedData['foto_user'] = $filePath;
        }

        profile::findOrFail($id)->update($validatedData);
        return redirect()->route('profile.index')->with('success', 'Data worker berhasil diupdate');
    }
}

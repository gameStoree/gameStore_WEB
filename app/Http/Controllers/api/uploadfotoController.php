<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UploadFotoController extends Controller
{
    public function uploadPhoto(Request $request, $id)
    {
        $request->validate([
            'foto_user' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        if ($request->hasFile('foto_user')) {
            $file = $request->file('foto_user');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'foto-user/' . $fileName;
            $filePathStorage = 'public/' . $filePath;

            Storage::put($filePathStorage, file_get_contents($file));

            $user->foto_user = $filePath;
            $user->save();

            return response()->json(['success' => 'Photo uploaded successfully', 'file' => $filePath], 200);
        } else {
            return response()->json(['error' => 'No file uploaded'], 400);
        }
    }

    public function getUserPhoto($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Mendapatkan path foto dari user
        $filePath = $user->foto_user;

        // Memeriksa apakah file foto ada
        if (!Storage::exists($filePath)) {
            return response()->json(['error' => 'Photo not found'], 404);
        }

        // Membaca file foto dan mengirimkannya kembali sebagai respons
        $fileContent = Storage::get($filePath);
        return response($fileContent, 200)->header('Content-Type', 'image/jpeg');
    }
}

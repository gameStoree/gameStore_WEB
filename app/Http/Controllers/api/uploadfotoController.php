<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UploadFotoController extends Controller
{
    public function updatePhoto(Request $request, $id)
    {
    $request->validate([
        'foto_user' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = User::find($id);

    if ($user) {
        if ($request->hasFile('foto_user')) {
            $file = $request->file('foto_user');
            $path = $file->store('public/foto_user');
            if ($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            $user->foto_user = $path;
            $user->save();
            $photoUrl = Storage::url($path);

            return response()->json(['message' => 'Photo updated successfully', 'path' => $path], 200);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    } else {
        return response()->json(['message' => 'User not found'], 404);
    }
}

public function getPhoto(Request $request, $id)
{
    $user = User::find($id);

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }
    if (!$user->foto_user) {
        return response()->json(['message' => 'User has no profile photo'], 404);
    }
    $photoUrl = Storage::url($user->foto_user);

    return response()->json(['photo_url' => $photoUrl], 200);
}



}

<?php

namespace App\Http\Controllers;

use App\Models\kategoriGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class kategoriGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminDev.kategoriGame.index', [
            'active' => 'kategoriGame',
            'judul' => 'KATEGORI GAME',
            'data' => kategoriGame::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDev.kategoriGame.create', [
            'judul' => 'KATEGORI GAME'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_game' => 'required|max:30',
            'poster_game' => 'image|max:2048',
        ]);

        if ($request->hasFile('poster_game')) {
            $file = $request->file('poster_game');
            $fileName = $file->getClientOriginalName();
            $filePath = 'poster-game/' . $fileName;
            $filePathStorage = 'public/poster-game/' . $fileName;
            Storage::put($filePathStorage, file_get_contents($file));
            $validatedData['poster_game'] = $filePath;
            $validatedData['poster_game'] = $filePath; // Menyimpan foto ke dalam foto_user pada tabel users
        }

        kategoriGame::create($validatedData);
        return redirect()->route('kategoriGame.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kategoriGame::where('id', $id)->first();
        return view('adminDev.kategoriGame.update', [
            'judul' => 'KATEGORI GAME',
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_game' => 'required|max:30',
            'poster_game' => 'image|max:2048', // Menghapus required agar tidak wajib mengunggah ulang poster game
        ]);

        // Cek apakah ada file yang diunggah
        if ($request->hasFile('poster_game')) {
            $file = $request->file('poster_game');
            $fileName = $file->getClientOriginalName();
            $filePath = 'poster-game/' . $fileName;
            $filePathStorage = 'public/poster-game/' . $fileName;
            Storage::put($filePathStorage, file_get_contents($file));
            $validatedData['poster_game'] = $filePath;
        } else {
            // Jika tidak ada file yang diunggah, gunakan nilai yang sudah ada dalam database
            $existingData = kategoriGame::findOrFail($id);
            $validatedData['poster_game'] = $existingData->poster_game;
        }

        kategoriGame::findOrFail($id)->update($validatedData);
        return redirect()->route('kategoriGame.index')->with('success', 'Berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kategoriGame::where('id', $id)->delete();
        return redirect()->route('kategoriGame.index')->with('success', 'Berhasil menghapus data');
    }
}

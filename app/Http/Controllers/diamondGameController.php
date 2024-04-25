<?php

namespace App\Http\Controllers;

use App\Models\diamondGame;
use App\Models\kategoriGame;
use Illuminate\Http\Request;

class diamondGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diamondGames = diamondGame::select('diamond_game.*', 'kategori_games.nama_game', 'diamond_game.jumlah_diamond', 'diamond_game.harga_diamond')
            ->join('kategori_games', 'diamond_game.nama_game', '=', 'kategori_games.id')
            ->get();

        return view('adminDev.diamondGame.index', [
            'judul' => 'DIAMOND GAME',
            'data' => $diamondGames
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_kategori = kategoriGame::all();
        return view('adminDev.diamondGame.create', [
            'judul' => 'DIAMOND GAME',
            'data_kategori' => $data_kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_game' => 'required|max:30',
            'jumlah_diamond' => 'required|max:30',
            'harga_diamond' => 'required|max:30'
        ]);

        diamondGame::create($validatedData);

        return redirect()->route('diamondGame.index')->with('success', 'Berhasil menambahkan data');
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
        $data = diamondGame::where('id', $id)->first();
        return view('adminDev.diamondGame.update', [
            'judul' => 'DIAMOND GAME',
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_game' => 'required|max:30',
            'jumlah_diamond' => 'required|max:30',
            'harga_diamond' => 'required|max:30'
        ]);

        diamondGame::findOrFail($id)->update($validatedData);

        return redirect()->route('diamondGame.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        diamondGame::where('id', $id)->delete();
        return redirect()->route('diamondGame.index')->with('success', 'Berhasil menghapus data');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\diamondGame;
use Illuminate\Http\Request;

class diamondGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminDev.diamondGame.index', [
            'judul' => 'DIAMOND GAME',
            'data' => diamondGame::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDev.diamondGame.create', [
            'judul' => 'DIAMOND GAME',
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
        // return view('adminDev.diamondGame.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

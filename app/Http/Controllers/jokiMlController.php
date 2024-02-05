<?php

namespace App\Http\Controllers;

use App\Models\jokiML;
use Illuminate\Http\Request;

class jokiMlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminDev.jokiML.index', [
            'judul' => 'JOKI ML',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDev.jokiML.create', [
            'judul' => 'JOKI ML',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_paket' => 'required|max:30',
            'joki_rank' => 'required|max:30',
            'harga' => 'required|max:30',
        ]);

        jokiML::create($validateData);

        return redirect()->route('jokiML.index')->with('success', 'Berhasil menambahkan data');
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
        //
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

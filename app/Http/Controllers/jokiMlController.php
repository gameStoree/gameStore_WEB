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
            'data' => jokiML::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDev.jokiML.create', [
            'judul' => 'JOKI ML',
            'data' => jokiML::all()
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
            'harga_joki' => 'required|max:30',
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
        $data = jokiML::where('id', $id)->first();
        return view('adminDev.jokiML.update', [
            'judul' => 'JOKI ML',
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nama_paket' => 'required|max:30',
            'joki_rank' => 'required|max:30',
            'harga_joki' => 'required|max:30',
        ]);

        jokiML::findOrFail($id)->update($validateData);
        return redirect()->route('jokiML.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jokiML::where('id', $id)->delete();
        return redirect()->route('jokiML.index')->with('success', 'Berhasil menghapus data');
    }
}

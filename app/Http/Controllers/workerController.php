<?php

namespace App\Http\Controllers;

use App\Models\worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class workerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminDev.worker.index', [
            'judul' =>'WORKER',
            'data' => worker::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDev.worker.create', [
            'judul' =>'WORKER',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:30',
            'email' => 'required|max:30',
            'password' => 'required|max:8',
            'tggl_lahir' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|max:2048',
            'high_rank' => 'required|max:20',
            'role' => 'required|max:30',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
            $filePath = 'foto-worker/' . $fileName;
            $filePathStorage = 'public/foto-worker/' . $fileName;
            // $filePath = $file->storePublicly('foto-worker', 'public');
            // $filePath = "public/".$file->storePublicly('foto-worker', $fileName);
            Storage::put($filePathStorage, file_get_contents($file));
            $validatedData['foto'] = $filePath;
        }

        worker::create($validatedData);

        return redirect()->route('worker.index')->with('success', 'Berhasil menambahkan worker');
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
        $data = worker::where('id', $id)->first();
        return view('adminDev.worker.update', [
            'judul' => 'WORKER',
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:30',
            'email' => 'required|max:30',
            'password' => 'required|max:8',
            'tggl_lahir' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|max:2048',
            'high_rank' => 'required|max:20',
            'role' => 'required|max:30',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
            $filePath = 'foto-worker/' . $fileName;
            $filePathStorage = 'public/foto-worker/' . $fileName;
            // $filePath = $file->storePublicly('foto-worker', 'public');
            // $filePath = "public/".$file->storePublicly('foto-worker', $fileName);
            Storage::put($filePathStorage, file_get_contents($file));
            $validatedData['foto'] = $filePath;
        }

        worker::findOrFail($id)->update($validatedData);

        return redirect()->route('worker.index')->with('success', 'Data worker berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        worker::where('id', $id)->delete();
        return redirect()->route('worker.index')->with('success', 'Berhasil menghapus data');
    }
}

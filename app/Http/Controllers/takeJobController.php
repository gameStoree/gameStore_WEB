<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesananJoki;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class takeJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workerId = Auth::id();

        $jokiTerkonfirmasi = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.joki_rank', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            // ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'Lunas')
            ->get();

        $jokiProgress = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.joki_rank', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->where('pemesanan_jokis.status', '=', 'Progress')
            ->where('pemesanan_jokis.id_worker', '=', $workerId)
            ->get();

        return view('worker.takeJob.index', [
            'judul' => 'TAKE JOB'
        ], compact('jokiTerkonfirmasi', 'jokiProgress'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $validatedData = [
            'id_worker' => Auth::id()
        ];

        $validatedData['status'] = 'Progress';
        pemesananJoki::where('id', $id)->update($validatedData);

        return redirect()->route('takeJob.index')->with('success', 'Update status data progress');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function report(Request $request, string $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'laporan_akun' => 'required|string'
        ]);

        pemesananJoki::where('id', $id)->update([
            'laporan_akun' => $validatedData['laporan_akun'],
            'status' => 'Akun Bermasalah'
        ]);

        return redirect()->route('takeJob.index')->with('success', 'Akun sudah dilaporkan kepada admin');
    }

    public function jokiDone(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'ss_hasil_joki.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pemesanan = pemesananJoki::find($id);

        if ($request->hasFile('ss_hasil_joki')) {
            $images = $request->file('ss_hasil_joki');
            $imageNames = [];

            foreach ($images as $image) {
                $fileName = $image->getClientOriginalName();
                $filePath = 'hasil-joki/' . $fileName;
                $filePathStorage = 'public/hasil-joki/' . $fileName;
                Storage::put($filePathStorage, file_get_contents($image));
                $imageNames[] = $filePath;
            }

            $pemesanan->ss_hasilJoki = implode(',', $imageNames);
        }
        // if ($request->hasFile('ss_hasil_joki')) {
        //     $images = $request->file('ss_hasil_joki');
        //     $imageNames = [];

        //     foreach ($images as $index => $image) {
        //         $fileName = 'img' . ($index + 1) . '.' . $image->getClientOriginalExtension();
        //         $filePath = 'hasil-joki/' . $fileName;
        //         $filePathStorage = 'public/hasil-joki/' . $fileName;
        //         Storage::put($filePathStorage, file_get_contents($image));
        //         $imageNames[] = $filePath;
        //     }
        // }

        $pemesanan->status = 'Done';
        $pemesanan->save();

        return redirect()->back()->with('success', 'Jokian telah selesai dikerjakan');
    }
}

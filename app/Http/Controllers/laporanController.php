<?php

namespace App\Http\Controllers;

use App\Models\pemesananDiamond;
use App\Models\pemesananJoki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil tanggal awal dan tanggal akhir dari request, jika tersedia
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        // Query untuk pemesananJoki
        $jokisQuery = DB::table('pemesanan_jokis as pj')
            ->join('joki_m_l as jl', 'pj.id_paket', '=', 'jl.id')
            ->join('users as u', 'pj.id_user', '=', 'u.id')
            ->select(
                'pj.id as id_transaksi',
                'jl.nama_paket as item',
                DB::raw('"Joki" as jenis_item'),
                'pj.harga_keseluruhan as harga',
                'pj.no_hp',
                'u.nama_lengkap as id_customer',
                'pj.created_at as tanggal' // Tambahkan tanggal transaksi
            );

        // Query untuk pemesananDiamond
        $diamondsQuery = DB::table('pemesanan_diamonds as pd')
            ->join('diamond_game as dg', 'pd.id_diamond', '=', 'dg.id')
            ->join('kategori_games as kg', 'dg.nama_game', '=', 'kg.id')
            ->join('users as u', 'pd.id_user', '=', 'u.id')
            ->select(
                'pd.id as id_transaksi',
                'kg.nama_game as item',
                DB::raw('"Diamond" as jenis_item'),
                'pd.harga_keseluruhan as harga',
                'pd.no_hp',
                'u.nama_lengkap as id_customer',
                'pd.created_at as tanggal' // Tambahkan tanggal transaksi
            );

        // Filter hanya jika tanggal awal dan akhir disediakan
        if ($tgl_awal && $tgl_akhir) {
            $jokisQuery->whereBetween('pj.created_at', [$tgl_awal, $tgl_akhir]);
            $diamondsQuery->whereBetween('pd.created_at', [$tgl_awal, $tgl_akhir]);
        }

        // Menggabungkan hasil query
        $laporan = $diamondsQuery->unionAll($jokisQuery)->get();

        return view('adminDev.laporan.index', [
            'judul' => 'LAPORAN',
            'laporan' => $laporan,
        ]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesananJoki;

class pemesananJokiController extends Controller
{
    public function pesananJokiMasuk()
    {
        $jokiMasuk = pemesananJoki::select('pemesanan_jokis.*', 'users.nama_lengkap', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'Belum bayar')
            ->get();

        $jokiTerkonfirmasi = pemesananJoki::select('pemesanan_jokis.*', 'users.nama_lengkap', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'SudahBayar')
            ->get();

        return view('adminDev.pemesanan.joki.index', [
            'judul' => 'PEMESANAN JOKI'
        ], compact('jokiMasuk', 'jokiTerkonfirmasi'));
    }

    public function addPemesananJoki(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'login' => 'required|max:20',
            'Id_server' => 'required|max:20',
            'email_no_hp_montonID' => 'required|max:30',
            'password' => 'required|max:255',
            'request_hero' => 'required|max:255',
            'catata_penjoki' => 'required|max:255',
            'no_hp' => 'required|max:13',
            'id_paket' => 'required|max:3',
            'jumlah_bintang' => 'required|max:3',
        ]);

        $validatedData['status'] = 'Belum Bayar';
        pemesananJoki::create($validatedData);

        return redirect('/pemesananJoki')->with('success', 'Pemesanan Joki Berhasil');
    }
}

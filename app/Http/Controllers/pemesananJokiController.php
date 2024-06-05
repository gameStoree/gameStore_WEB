<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Illuminate\Http\Request;
use App\Models\pemesananJoki;
use Illuminate\Support\Facades\Auth;

class pemesananJokiController extends Controller
{
    public function pesananJokiMasuk()
    {
        $workerId = Auth::id();

        $jokiMasuk = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            // ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'Belum bayar')
            ->get();

        $jokiTerkonfirmasi = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            // ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'Lunas')
            ->get();

        $jokiProgress = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.joki_rank', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->where('pemesanan_jokis.status', '=', 'Progress')
            ->where('pemesanan_jokis.id_worker', '=', $workerId)
            ->get();

        return view('adminDev.pemesanan.joki.index', [
            'judul' => 'PEMESANAN JOKI'
        ], compact('jokiMasuk', 'jokiTerkonfirmasi','jokiProgress'));
    }
}

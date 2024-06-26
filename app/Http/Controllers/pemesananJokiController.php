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

        $jokiProgress = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki', 'worker.nama_lengkap')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->join('worker', 'pemesanan_jokis.id_worker', '=', 'worker.id')
            // ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'Progress')
            ->get();

        $jokiDone = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki', 'worker.nama_lengkap')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->join('worker', 'pemesanan_jokis.id_worker', '=', 'worker.id')
            // ->join('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->where('pemesanan_jokis.status', '=', 'Done')
            ->get();

        $jokiAkunBermasalah = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.joki_rank', 'joki_m_l.joki_rank', 'joki_m_l.harga_joki', 'worker.nama_lengkap')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->join('worker', 'pemesanan_jokis.id_worker', '=', 'worker.id')
            ->where('pemesanan_jokis.status', '=', 'Akun Bermasalah')
            ->get();

        return view('adminDev.pemesanan.joki.index', [
            'judul' => 'PEMESANAN JOKI'
        ], compact('jokiMasuk', 'jokiTerkonfirmasi', 'jokiProgress', 'jokiDone', 'jokiAkunBermasalah'));
    }
}

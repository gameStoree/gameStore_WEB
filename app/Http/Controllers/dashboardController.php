<?php

namespace App\Http\Controllers;

use App\Models\pemesananJoki;
use App\Models\User;
use App\Models\worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $transakasi = DB::table('pemesanan_jokis')
        ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
        ->select(
            'pemesanan_jokis.id',
            'joki_m_l.nama_paket as item',
            'joki_m_l.joki_rank as jenis_item',
            'pemesanan_jokis.harga_keseluruhan as harga',
            'pemesanan_jokis.created_at'
        )
        ->unionAll(
            DB::table('pemesanan_diamonds')
                ->join('diamond_game', 'pemesanan_diamonds.id_diamond', '=', 'diamond_game.id')
                ->join('kategori_games', 'diamond_game.nama_game', '=', 'kategori_games.id')
                ->select(
                    'pemesanan_diamonds.id',
                    'kategori_games.nama_game as item',
                    'diamond_game.jumlah_diamond as jenis_item',
                    'pemesanan_diamonds.harga_keseluruhan as harga',
                    'pemesanan_diamonds.created_at'
                )
        )
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

        $totalPendatan = DB::table('pemesanan_jokis')
            ->select('harga_keseluruhan')
            ->unionAll(DB::table('pemesanan_diamonds')->select('harga_keseluruhan'))
            ->sum('harga_keseluruhan');

        $jumlahWorker = worker::count();
        $jumlahCustomer = User::where('role', 'customer')->count();
        $jumlahJokiProgress = pemesananJoki::where('status', 'progress')->count();
        $jumlahJokiDone = pemesananJoki::where('status', 'done')->count();

        return view('adminDev.dashboard.index', [
            'active' => 'dashboard',
            'judul' => 'DASHBOARD',
            'totalPendapatan' => $totalPendatan,
            'jumlahWorker' => $jumlahWorker,
            'jumlahCustomer' => $jumlahCustomer,
            'jumlahJokiProgress' => $jumlahJokiProgress,
            'jumlahJokiDone' => $jumlahJokiDone,
            'transaksi' => $transakasi
        ]);
    }
}

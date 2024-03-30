<?php

namespace App\Http\Controllers;

use App\Models\pemesananDiamond;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class pemesananDiamondController extends Controller
{
    public function pesananMasuk()
    {
        $dataMasuk = pemesananDiamond::select('pemesanan_diamonds.*', 'diamond_game.nama_game', 'users.nama_lengkap')
            ->join('diamond_game', 'pemesanan_diamonds.id_diamond', '=', 'diamond_game.id')
            ->join('users', 'pemesanan_diamonds.id_user', '=', 'users.id')
            ->where('pemesanan_diamonds.status', '=', 'Belum bayar')
            ->get();

        $dataTerkonfirmasi = pemesananDiamond::select('pemesanan_diamonds.*', 'diamond_game.nama_game', 'users.nama_lengkap')
            ->join('diamond_game', 'pemesanan_diamonds.id_diamond', '=', 'diamond_game.id')
            ->join('users', 'pemesanan_diamonds.id_user', '=', 'users.id')
            ->where('pemesanan_diamonds.status', '=', 'Terkirim')
            ->get();

        return view('adminDev.pemesanan.diamond.index', [
            'judul' => 'PEMESANAN DIAMOND'
        ], compact('dataMasuk', 'dataTerkonfirmasi'));
    }


    public function diamondKonfirmasiKirim(String $id)
    {
        $pemesanan = pemesananDiamond::findOrFail($id);
        $pemesanan->status = 'Terkirim';
        $pemesanan->save();

        return redirect()->route('pemesananDiamond.index')->with('success', 'Status berhasil diubah menjadi Terkirim');;
    }
}

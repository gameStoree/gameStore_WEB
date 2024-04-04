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

    public function hapusPesanan(string $id)
    {
        // $pemesanan = pemesananDiamond::findOrFail($id);

        // if ($pemesanan->status == 'Belum Bayar') {
        //     $waktuPengiriman = $pemesanan->created_at;
        //     $batasWaktu = $waktuPengiriman->addMinutes(2);

        //     if (now()->greaterThanOrEqualTo($batasWaktu)) {
        //         $pemesanan->delete();
        //         return redirect()->back()->with('success', 'Pesanan berhasil dihapus karena tidak dibayar dalam waktu 2 menit.');
        //     } else {
        //         return redirect()->back()->with('error', 'Pesanan belum dapat dihapus karena belum mencapai batas waktu.');
        //     }
        // } else {
        //     return redirect()->back()->with('error', 'Pesanan tidak dapat dihapus karena sudah dibayar.');
        // }
    }
}

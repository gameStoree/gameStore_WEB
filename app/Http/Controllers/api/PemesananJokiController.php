<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemesananJoki;
use App\Models\JokiML;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananJokiController extends Controller
{
    public function searchPemesanan($id)
    {
        // Debug: Cek apakah ID diterima
        \Log::info('Searching for ID: ' . $id);
        $pemesananJoki = PemesananJoki::find($id);
        if ($pemesananJoki) {
            $paket = JokiML::find($pemesananJoki->id_paket);

            return response()->json([
                'type' => 'joki Rank',
                'pemesanan' => $pemesananJoki,
                'paket' => $paket
            ], 200);
        }

        // Coba mencari ID di tabel pemesanan diamond
        $pemesananDiamond = DB::table('pemesanan_diamonds')
            ->join('diamond_game', 'pemesanan_diamonds.id_diamond', '=', 'diamond_game.id')
            ->join('kategori_games', 'diamond_game.nama_game', '=', 'kategori_games.id')
            ->select(
                'pemesanan_diamonds.*',
                'diamond_game.jumlah_diamond',
                'diamond_game.harga_diamond',
                'kategori_games.nama_game',
                'kategori_games.poster_game'
            )
            ->where('pemesanan_diamonds.id', $id)
            ->first();

        if ($pemesananDiamond) {
            return response()->json([
                'type' => 'diamond',
                'pemesanan' => $pemesananDiamond
            ], 200);
        }

        return response()->json(['message' => 'Id Pemesanan tidak ditemukan!'], 404);
    }
}

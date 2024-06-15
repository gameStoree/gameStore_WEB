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

    // Coba mencari ID di tabel pemesanan joki
    $pemesananJoki = pemesananJoki::find($id);
    if ($pemesananJoki) {
        $paket = JokiML::find($pemesananJoki->id_paket);
        $images = $this->getImagePaths($pemesananJoki);

        return response()->json([
            'type' => 'joki Rank',
            'pemesanan' => $pemesananJoki,
            'paket' => $paket,
            'images' => $images,
        ], 200);
    }
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
            'pemesanan' => $pemesananDiamond,
        ], 200);
    }

    return response()->json(['message' => 'Id Pemesanan tidak ditemukan!'], 404);
}




private function getImagePaths($pemesananJoki)
{
    $images = [];

    if (!empty($pemesananJoki->ss_hasilJoki)) {
        $imagePaths = explode(',', $pemesananJoki->ss_hasilJoki);
        foreach ($imagePaths as $image) {
            $images[] = url('storage/public/' . $image);
        }
    }

    return $images;
}





// public function getImagePaths($id)
// {
//     $pemesanan = PemesananJoki::find($id);
//     if (!$pemesanan) {
//         return [];
//     }
//     $imagePaths = explode(',', $pemesanan->ss_hasilJoki);
//     $storagePaths = [];

//     // Mendapatkan URL untuk setiap gambar
//     foreach ($imagePaths as $imagePath) {
//         $fullPath = 'hasil-joki/' . $imagePath;
//         $url = asset($fullPath);
//         $storagePaths[] = $url;
//     }

//     return $storagePaths;
// }



    // public function getImageById($id)
    // {
    //     // Mencari pemesanan berdasarkan ID
    //     $pemesanan = pemesananJoki::find($id);

    //     // Jika pemesanan tidak ditemukan
    //     if (!$pemesanan) {
    //         return response()->json([
    //             'message' => 'Pemesanan tidak ditemukan'
    //         ], 404);
    //     }

    //     // Mendapatkan daftar gambar yang dipisahkan oleh koma
    //     $imagePaths = explode(',', $pemesanan->ss_hasilJoki);

    //     // Mengembalikan respons JSON dengan daftar gambar
    //     return response()->json([
    //         'images' => $imagePaths,
    //         'status' => 'success'
    //     ]);
    // }
}

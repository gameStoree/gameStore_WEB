<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemesananJoki;
use Illuminate\Http\Request;

class PemesananJokiController extends Controller
{
    public function searchById(Request $request, $orderId)
    {
        try {
            // Mencari pemesanan berdasarkan ID dengan melakukan join antar tabel
            $order = PemesananJoki::leftJoin('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
                ->leftJoin('users', 'pemesanan_jokis.id_user', '=', 'users.id')
                ->leftJoin('worker', 'pemesanan_jokis.id_worker', '=', 'worker.id')
                ->select(
                    'pemesanan_jokis.*',
                    'joki_m_l.nama_paket',
                    'joki_m_l.joki_rank',
                    'joki_m_l.harga_joki',
                    'users.nama_lengkap AS nama_user',
                    'worker.nama_lengkap AS nama_worker',
                )   
                ->findOrFail($orderId);

            // Mengembalikan data pemesanan sebagai response API
            return response()->json([
                'success' => true,
                'data' => $order
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 404);
        }
    }
}

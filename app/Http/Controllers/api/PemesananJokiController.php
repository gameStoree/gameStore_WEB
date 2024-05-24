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
        $order = PemesananJoki::leftJoin('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->leftJoin('users', 'pemesanan_jokis.id_user', '=', 'users.id')
            ->leftJoin('worker', 'pemesanan_jokis.id_worker', '=', 'worker.id')
            ->select(
                'pemesanan_jokis.*',
                'joki_m_l.nama_paket AS nama_paket',
                'joki_m_l.joki_rank AS nama_joki',
                'joki_m_l.harga_joki',
                'users.nama_lengkap AS nama_user',
                'worker.nama_lengkap AS nama_worker'
            )
            ->find($orderId);

        // Jika pesanan ditemukan, kembalikan respons JSON dengan status 200
        if ($order) {
            return response()->json([
                'success' => true,
                'data' => $order
            ], 200);
        } else {
            // Jika pesanan tidak ditemukan, kembalikan respons JSON dengan status 404
            return response()->json([
                'success' => false,
                'message' => 'Order not found'
            ], 404);
        }
    } catch (\Exception $e) {
        // Tangani pengecualian lain jika terjadi
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}



}

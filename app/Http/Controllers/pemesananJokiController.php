<?php

namespace App\Http\Controllers;

use Midtrans\Config;
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
        // dd($request->all());
        $validatedData = $request->validate([
            'login_via' => 'required|max:20',
            'Id_Server' => 'required|max:30',
            'email_no_hp_montonID' => 'required|max:30',
            'password' => 'required|max:255',
            'request_hero' => 'required|max:255',
            'catatan_penjoki' => 'required|max:255',
            'no_hp' => 'required|max:13',
            'id_paket' => 'required',
            'jumlah_bintang' => 'required|max:3',
            'harga_keseluruhan' => 'required|max:11',
        ]);

        $validatedData['status'] = 'Belum Bayar';
        $pemesananJoki = pemesananJoki::create($validatedData);

        // Set up konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false; // Set true untuk Lingkungan Produksi
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Siapkan detail transaksi untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $pemesananJoki->id, // Gunakan ID kustom yang dihasilkan
                'gross_amount' => $validatedData['harga_keseluruhan'], // Gunakan harga total yang divalidasi
            ],
            'customer_details' => [
                'first_name' => 'Pelanggan', // Anda dapat menyesuaikan ini
                'last_name' => 'Nama', // Anda dapat menyesuaikan ini
                'email' => $validatedData['email_no_hp_montonID'], // Gunakan alamat email
                'phone' => $validatedData['no_hp'], // Gunakan nomor telepon
            ],
            'item_details' => [
                [
                    'id' => $validatedData['id_paket'], // Gunakan ID paket
                    'price' => $validatedData['harga_keseluruhan'], // Gunakan harga paket
                    'quantity' => 1, // Jumlah adalah 1 untuk satu paket
                    'name' => 'Paket Joki - ' . $validatedData['login_via'], // Nama deskriptif untuk paket
                ],
            ],
        ];

        // Dapatkan token Snap dari Midtrans
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);

        return redirect()->route('dashboardCustomer.index')->with(['success' => 'Pemesanan Joki Berhasil', 'snapToken' => $snapToken]);
    }
}

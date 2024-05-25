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
        pemesananJoki::create($validatedData);

        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        composer require midtrans/midtrans-php

        Alternatively, if you are not using **Composer**, you can download midtrans-php library
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require
        the file manually.

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        // \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        // \Midtrans\Config::$isProduction = false;
        // // Set sanitization on (default)
        // Config::$isSanitized = true;
        // // Set 3DS transaction for credit card to true
        // \Midtrans\Config::$is3ds = true;

        // $params = array(
        //     'transaction_details' => array(
        //         'order_id' => rand(),
        //         'gross_amount' => 10000,
        //     ),
        //     'customer_details' => array(
        //         'first_name' => 'budi',
        //         'last_name' => 'pratama',
        //         'email' => 'budi.pra@example.com',
        //         'phone' => '08111222333',
        //     ),
        // );

        // $snapToken = \Midtrans\Snap::getSnapToken($params);

        return redirect()->route('dashboardCustomer.index')->with('success', 'Pemesanan Joki Berhasil');
    }
}

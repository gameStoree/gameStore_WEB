<?php

namespace App\Http\Controllers;

use App\Models\JokiML;
use Illuminate\Http\Request;
use App\Models\pemesananJoki;
use Illuminate\Support\Facades\Auth;

class jokiRankCustomerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $jokiSatuan = JokiML::where('nama_paket', 'joki satuan')->get();
        $jokiPaketan = JokiML::where('nama_paket', 'joki paketan')->get();

        return view('customer.jasaJokiRank', compact('jokiSatuan', 'jokiPaketan', 'user'));
    }


    public function addPemesananJoki(Request $request)
    {
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
        $validatedData['id_user'] = Auth::id();

        $pemesananJoki = pemesananJoki::create($validatedData);

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false; // Set true for Production Environment
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $pemesananJoki->id,
                'gross_amount' => $validatedData['harga_keseluruhan'],
            ],
            'customer_details' => [
                // 'email' => $validatedData['email_no_hp_montonID'],
                'phone' => $validatedData['no_hp'],
            ],
            'item_details' => [
                [
                    'id' => $validatedData['id_paket'],
                    'price' => $validatedData['harga_keseluruhan'],
                    'quantity' => 1,
                    'name' => 'Paket Joki - ' . $validatedData['login_via'],
                ],
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return redirect()->route('pesanJokiInvoice.index', ['id' => $pemesananJoki->id, 'snapToken' => $snapToken]);
    }
}

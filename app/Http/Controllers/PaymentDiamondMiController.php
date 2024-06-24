<?php

namespace App\Http\Controllers;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Http\Request;

class PaymentDiamondMiController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }
 public function TransactionDiamond(Request $request)
    {



        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $request->amount,
            ],


            'customer_details' => [
                'first_name' => $request->first_name,
                'phone' => $request->phone,
            ],

            //   'item_details' => [
            //     [
            //         'id' => $request->id_diamond,
            //         'price' => $request->harga_diamond,
            //         'quantity' => $request->jumlah_diamond,
            //         'name' => 'topupmlbb',
            //         'subtotal' => $request->harga_diamond
            //     ]
            // ],
        ];

        // $item_details = [
        //     [
        //         'id' => $pemesanan->id_diamond,
        //         'price' => $pemesanan->harga_diamond,
        //         'quantity' => 1, // jumlah item, bisa disesuaikan
        //         'name' => 'topupmlbb', // atau bisa diambil dari $pemesanan->nama_game
        //         'subtotal' => $pemesanan->harga_diamond * 1 // bisa disesuaikan
        //     ]
        // ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}

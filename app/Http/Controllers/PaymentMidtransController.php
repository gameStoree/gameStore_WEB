<?php

namespace App\Http\Controllers;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Http\Request;

class PaymentMidtransController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }
 public function createTransaction(Request $request)
    {
        // $item =
        //     [
        //         [
        //         'id' => $request->id,
        //         'price' => 0,
        //         'quantity' => $request->banyak_bintang,
        //         'name' => "",
        //         ]
        //     ];

        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $request->amount,
            ],
            // 'item_details' => $item,
            'customer_details' => [
                'first_name' => $request->first_name,
                'email' => $request->email,
                'phone' => $request->phone,
            ],
            // 'keterangan' => $request->keterangan, // Menyimpan keterangan
            // 'doa' => $request->doa,        // Menyimpan doa
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DiamondGame;
use App\Models\pemesananDiamond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pesanDiamondCustomerController extends Controller
{
    public function show($game_id)
    {
        $diamonds = DiamondGame::where('nama_game', $game_id)->get();
        return view('customer.pesanDiamond', ['diamonds' => $diamonds]);
    }

    public function addPemesananDiamond(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'id_server' => 'required|max:30',
            'id_diamond' => 'required|max:20',
            'harga_keseluruhan' => 'required|max:11',
            'no_hp' => 'required|max:13',
        ]);

        $validatedData['status'] = 'Belum Bayar';
        $validatedData['id_user'] = Auth::id();
        $pemesananDiamond = pemesananDiamond::create($validatedData);

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pemesananDiamond->id,
                'gross_amount' => $validatedData['harga_keseluruhan'],
            ),
            'customer_details' => array(
                'phone' => $validatedData['no_hp'],
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);

        return redirect()->route('pesanDiamondInvoice.index', ['id' => $pemesananDiamond->id, 'snapToken' => $snapToken]);
    }
}

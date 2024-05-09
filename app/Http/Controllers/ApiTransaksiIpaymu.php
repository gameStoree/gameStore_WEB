<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananJoki;

class ApiTransaksiIpaymu extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari aplikasi Flutter
        $validatedData = $request->validate([
            'id_paket' => 'required|exists:joki_m_l,id',
            'login_via' => 'required',
            'nickname_ml' => 'required',
            'email_no_hp_montonID' => 'required',
            'password' => 'required',
            'request_hero' => 'required',
            'catatan_penjoki' => 'required',
            'metode_pembayaran' => 'required',
            'bukti_tf' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'id_user' => 'required',
        ]);

        // Proses penyimpanan data transaksi ke dalam database
        $transaction = new PemesananJoki();
        $transaction->id_paket = $validatedData['id_paket'];
        $transaction->login_via = $validatedData['login_via'];
        $transaction->nickname_ml = $validatedData['nickname_ml'];
        $transaction->email_no_hp_montonID = $validatedData['email_no_hp_montonID'];
        $transaction->password = $validatedData['password'];
        $transaction->request_hero = $validatedData['request_hero'];
        $transaction->catatan_penjoki = $validatedData['catatan_penjoki'];
        $transaction->metode_pembayaran = $validatedData['metode_pembayaran'];
        $transaction->bukti_tf = $validatedData['bukti_tf'];
        $transaction->no_hp = $validatedData['no_hp'];
        $transaction->status = $validatedData['status'];
        $transaction->id_user = $validatedData['id_user'];

        // Simpan data transaksi ke dalam database
        if ($transaction->save()) {
            return response()->json(['message' => 'Transaction stored successfully'], 201);
        } else {
            return response()->json(['message' => 'Failed to store transaction'], 500);
        }
    }


    public function handleCallback(Request $request)
    {
        // Mendapatkan data yang diterima dari iPaymu
        $status = $request->input('status');
        $transactionId = $request->input('transaction_id');

        // Memperbarui status transaksi di database
        $transaction = PemesananJokis::find($transactionId);
        if ($transaction) {
            $transaction->status = 'lunas'; // Atau sesuai dengan nilai yang sesuai
            $transaction->save();
            return response()->json(['message' => 'Transaction status updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
    }
}

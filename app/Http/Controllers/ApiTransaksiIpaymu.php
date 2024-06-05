<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananJoki;

class ApiTransaksiIpaymu extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_paket' => 'required|exists:joki_m_l,id',
            'jumlah_bintang' => 'required',
            'login_via' => 'required',
            'id_server' => 'required',
            'harga_keseluruhan' => 'required',
            'email_no_hp_montonID' => 'required',
            'password' => 'required',
            'request_hero' => 'required',
            'catatan_penjoki' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'id_user' => 'required',
        ]);

        $transaction = new pemesananJoki();
        $transaction->id = $this->generateidjoki();
        $transaction->id_paket = $validatedData['id_paket'];
        $transaction->jumlah_bintang = $validatedData['jumlah_bintang'];
        $transaction->harga_keseluruhan = $validatedData ['harga_keseluruhan'];
        $transaction->login_via = $validatedData['login_via'];
        $transaction->id_server = $validatedData['id_server'];
        $transaction->email_no_hp_montonID = $validatedData['email_no_hp_montonID'];
        $transaction->password = $validatedData['password'];
        $transaction->request_hero = $validatedData['request_hero'];
        $transaction->catatan_penjoki = $validatedData['catatan_penjoki'];
        $transaction->no_hp = $validatedData['no_hp'];
        $transaction->status = $validatedData['status'];
        $transaction->id_user = $validatedData['id_user'];

        if ($transaction->save()) {
            return response()->json(['message' => 'Transaction stored successfully'], 201);
        } else {
            return response()->json(['message' => 'Failed to store transaction'], 500);
        }
    }


    public function generateidjoki(){
        $prefix = 'INVJ';
            $randomString = $this->generateRandomString(7);
            $lastChar = substr($randomString, -1);
            if (is_numeric($lastChar)) {
                $randomString[strlen($randomString) - 1] = ++$lastChar;
            } else {
                $randomString .= '1';
            }
            $id = $prefix . $randomString;
            return $id;
        }

        private function generateRandomString($length = 6) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= strtoupper($characters[rand(0, strlen($characters) - 1)]);
            }
            return $randomString;
    }



    public function handleCallback(Request $request)
    {
        $status = $request->input('status');
        $transactionId = $request->input('transaction_id');
        $transaction = PemesananJokis::find($transactionId);
        if ($transaction) {
            $transaction->status = 'lunas';
            $transaction->save();
            return response()->json(['message' => 'Transaction status updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
    }

    public function getPemesananJokiTerbaru(Request $request, $id_user){
    $pemesanan = PemesananJoki::where('id_user', $id_user)
                              ->orderBy('created_at', 'desc')
                              ->first();

    if ($pemesanan) {
        return response()->json($pemesanan);
    } else {
        return response()->json(['message' => 'Tidak ada pemesanan ditemukan untuk pengguna ini.'], 404);
    }
    }




}

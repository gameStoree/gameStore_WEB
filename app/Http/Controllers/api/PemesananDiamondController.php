<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemesananDiamond;
use Illuminate\Http\Request;

class PemesananDiamondController extends Controller
{
    public function pemesanan(Request $request)
    {
        // Validasi request
        $request->validate([
            'id_game' => 'required',
            'metode_pembayaran' => 'required',
            'status' => 'required',
            'bukti_tf' => 'required',
            'no_hp' => 'required',
            'id_diamond' => 'required',
            'id_user' => 'required',
        ]);
        // $transaction->bukti_tf = $validatedData['bukti_tf'];
        // Simpan data ke dalam database
        $pemesananDiamond = new PemesananDiamond();
        $pemesananDiamond->id_game = $request->input('id_game');
        $pemesananDiamond->metode_pembayaran = $request->input('metode_pembayaran');
        $pemesananDiamond->bukti_tf = $request->input('bukti_tf');
        $pemesananDiamond->status = $request->input('status');
        $pemesananDiamond->no_hp = $request->input('no_hp');
        $pemesananDiamond->id_diamond = $request->input('id_diamond');
        $pemesananDiamond->id_user = $request->input('id_user');
        $pemesananDiamond->created_at = now();
        $pemesananDiamond->save();

        return response()->json(['message' => 'Pemesanan berhasil disimpan'], 201);
    }

            private function parseIdGame($combinedIdGame)
        {
            // Misalnya, Anda bisa menggunakan regular expression untuk memisahkan nilai
            // Di sini hanya contoh sederhana, Anda mungkin perlu menyesuaikan dengan kebutuhan Anda
            preg_match('/^(\d+) \((\d+)\)$/', $combinedIdGame, $matches);

            // $matches[1] akan berisi idGame
            // $matches[2] akan berisi serverGame

            // Anda bisa mengembalikan salah satu dari keduanya atau keduanya bergantung pada kebutuhan Anda
            return (int)$matches[1]; // Kembalikan idGame sebagai integer
        }
}

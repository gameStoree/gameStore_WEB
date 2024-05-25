<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemesananDiamond;
use App\Models\User;
use Illuminate\Http\Request;

class PemesananDiamondController extends Controller
{
        public function pemesanan(Request $request)
        {
            $validatedData = $request->validate([
                'id_server' => 'required',
                'status' => 'required',
                'no_hp' => 'required',
                'id_diamond' => 'required',
                'id_user' => 'required',
            ]);

            $pemesanan = new PemesananDiamond();
            $pemesanan->id = $this->generateId();
            $pemesanan->id_server = $validatedData['id_server'];
            $pemesanan->status = $validatedData['status'];
            $pemesanan->no_hp = $validatedData['no_hp'];
            $pemesanan->id_diamond = $validatedData['id_diamond'];
            $pemesanan->id_user = $validatedData['id_user'];
            $pemesanan->save();

            return response()->json(['message' => 'Pemesanan berhasil dibuat'], 201);
        }

        private function generateId()
        {
            $prefix = 732;
            $randomNumber = rand(100, 99999);
            $suffix = str_pad($this->getNextSequenceNumber(), 4, '0', STR_PAD_LEFT);

            return (int) ($prefix . $randomNumber . $suffix);
        }

        private function getNextSequenceNumber()
        {
            $lastRecord = PemesananDiamond::orderBy('id', 'desc')->first();
            if (!$lastRecord) {
                return 10;
            } else {
                $lastId = (string) $lastRecord->id;
                $lastSequenceNumber = (int) substr($lastId, -4);
                return $lastSequenceNumber + 1;
            }
        }

                private function parseIdGame($combinedIdGame)
            {
                // Misalnya, Anda bisa menggunakan regular expression untuk memisahkan nilai
                // Di sini hanya contoh sederhana, Anda mungkin perlu menyesuaikan dengan kebutuhan Anda
                preg_match('/^(\d+) \((\d+)\)$/', $combinedIdGame, $matches);
                return (int)$matches[1]; // Kembalikan idGame sebagai integer
            }


            public function getOrdersByUser($id_user)
            {
                $oneWeekAgo = \Carbon\Carbon::now()->subWeek();

                $orders = PemesananDiamond::where('id_user', $id_user)
                            ->where('created_at', '>=', $oneWeekAgo)
                            ->get(['id', 'created_at']);

                return response()->json(['orders' => $orders]);
            }



    }

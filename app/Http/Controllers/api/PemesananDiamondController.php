<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemesananDiamond;
use App\Models\PemesananJoki;
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

        private function generateId() {
            $prefix = 'INVD';
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





        private function parseIdGame($combinedIdGame)
            {
                // Misalnya, Anda bisa menggunakan regular expression untuk memisahkan nilai
                // Di sini hanya contoh sederhana, Anda mungkin perlu menyesuaikan dengan kebutuhan Anda
                preg_match('/^(\d+) \((\d+)\)$/', $combinedIdGame, $matches);
                return (int)$matches[1];
            }

            public function getCombinedOrdersByUser($id_user) {
            $fiveMinutesAgo = \Carbon\Carbon::now()->subMinutes(5);
            $diamondOrders = PemesananDiamond::where('id_user', $id_user)
                                ->where('created_at', '>=', $fiveMinutesAgo)
                                ->get(['id', 'created_at']);
            $jokiOrders = PemesananJoki::where('id_user', $id_user)
                                ->where('created_at', '>=', $fiveMinutesAgo)
                                ->get(['id', 'created_at']);

                \Log::info('Diamond Orders: ', $diamondOrders->toArray());
                \Log::info('Joki Orders: ', $jokiOrders->toArray());

            $orders = $diamondOrders->merge($jokiOrders)->sortByDesc('created_at')->values();

            return response()->json(['orders' => $orders]);
        }

        
        public function getPemesananDiamondTerbaru(Request $request, $id_user){
        $pemesanan = PemesananDiamond::where('id_user', $id_user)
                                  ->orderBy('created_at', 'desc')
                                  ->first();

            if ($pemesanan) {
                return response()->json($pemesanan);
            } else {
                return response()->json(['message' => 'Tidak ada pemesanan ditemukan untuk pengguna ini.'], 404);
            }
        }




 }

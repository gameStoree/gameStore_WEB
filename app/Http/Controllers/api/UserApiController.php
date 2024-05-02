<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\pemesananJoki;

class UserApiController extends Controller
{
    public function getPemesanan()
    {
        $pemesananJoki = pemesananJoki::all();
        return response()->json(['message' => 'success','statuscode'=> 200, 'pemesanan' => $pemesananJoki]);
    }

    public function postPemesanan(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        if ($request == 'id') {
            $pemesananJoki = pemesananJoki::all();
           
            return response()->json(['message' => 'success', 'pemesananJoki' => $pemesananJoki ], 200);
        } else {
            return response()->json(['message' => 'Cek Pemesanan gagal'], 401);
        }
    }

    public function getPemesananByid($id)
    {
        $pemesananJoki = pemesananJoki::find($id);
        return response()->json(['message' => 'success','statuscode'=> 200, 'pemesanan' => $pemesananJoki]);
    }

}


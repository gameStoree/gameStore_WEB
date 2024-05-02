<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DiamondGame;
use Illuminate\Http\Request;

class DiamondGameController extends Controller
{
    public function diamondFreeFire()
{
    $diamonds = DiamondGame::where('nama_game', '1')->get();

    // Mengecek apakah ada data yang ditemukan
    if ($diamonds->isEmpty()) {
        return response()->json(['message' => 'Data not found'], 404);
    }

    // Mengembalikan data diamond_game dalam format JSON
    return response()->json(['data' => $diamonds], 200);
}

public function diamondPUBG()
{
    // Mengambil data diamond_game berdasarkan nama_game PUBG
    $diamonds = DiamondGame::where('nama_game', 'PUBG')->get();

    // Mengecek apakah ada data yang ditemukan
    if ($diamonds->isEmpty()) {
        return response()->json(['message' => 'Data not found'], 404);
    }

    // Mengembalikan data diamond_game dalam format JSON
    return response()->json(['data' => $diamonds], 200);
}


Public function diamondMobileLegend(){
    $diamonds = DiamondGame::where('nama_game', '2') -> get();

    if ($diamonds ->isEmpty()){
        return response() -> json(['message' => 'Data not found'], 400);
    }
    return response()->json(['data' => $diamonds], 200);
}






}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DiamondGame;
use App\Models\kategoriGame;
use Illuminate\Http\Request;

class DiamondGameController extends Controller
{
    public function GetdataDiamond($gameName)
    {
        // Mengambil data diamond game berdasarkan nama game tertentu dari tabel kategori_games
        $diamonds = DiamondGame::join('kategori_games', 'kategori_games.id', '=', 'diamond_game.nama_game')
            ->where('kategori_games.nama_game', $gameName)
            ->select('diamond_game.*', 'kategori_games.poster_game')
            ->get();

        // Mengembalikan data diamond game dalam format JSON
        return response()->json(['data' => $diamonds], 200);
    }





}

<?php

namespace App\Http\Controllers;

use App\Models\DiamondGame;
use Illuminate\Http\Request;

class pesanDiamondCustomerController extends Controller
{
    public function show($game_id) {
        $diamonds = DiamondGame::where('nama_game', $game_id)->get();
        return view('customer.pesanDiamond', ['diamonds' => $diamonds]);
    }
}

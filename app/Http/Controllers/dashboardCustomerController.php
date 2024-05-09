<?php

namespace App\Http\Controllers;

use App\Models\kategoriGame;
use Illuminate\Http\Request;

class dashboardCustomerController extends Controller
{
    public function index() {
        $kategori = kategoriGame::all();
        return view('customer.beranda', [
            'kategori' => $kategori
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\JokiML;
use Illuminate\Http\Request;

class jokiRankCustomerController extends Controller
{
    public function index() {
        $jokiSatuan = JokiML::where('nama_paket', 'joki satuan')->get();
        $jokiPaketan = JokiML::where('nama_paket', 'joki paketan')->get();
        return view('customer.jasaJokiRank', [
            'jokiSatuan' => $jokiSatuan,
            'jokiPaketan' => $jokiPaketan,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\pemesananDiamond;
use App\Models\pemesananJoki;
use Illuminate\Http\Request;

class cekInvoiceCustomerController extends Controller
{
    public function index()
    {
        // Mengambil data pemesananDiamond terbaru dengan jumlah yang cukup
        $pemesananDiamonds = pemesananDiamond::latest()->take(10)->get();

        // Mengambil data pemesananJoki terbaru dengan jumlah yang cukup
        $pemesananJokis = pemesananJoki::latest()->take(10)->get();

        // Menggabungkan hasil query dari kedua tabel
        $invoices = $pemesananDiamonds->merge($pemesananJokis);

        // Mengurutkan hasil penggabungan berdasarkan tanggal pembuatan, terbaru dulu
        $invoices = $invoices->sortByDesc('created_at');

        // Mengambil 10 data teratas dari hasil penggabungan
        $invoices = $invoices->take(10);

        return view('customer.invoice', compact('invoices'));
    }
}

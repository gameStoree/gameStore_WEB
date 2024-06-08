<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\pemesananJoki;
use App\Models\pemesananDiamond;

class cekInvoiceCustomerController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $invoiceNumber = $request->query('invoice');
        $isSearched = false; // Tambahkan variabel untuk menandai hasil pencarian

        if ($invoiceNumber) {
            $pemesananDiamond = pemesananDiamond::where('id', $invoiceNumber)->first();
            $pemesananJoki = pemesananJoki::where('id', $invoiceNumber)->first();

            if ($pemesananDiamond) {
                $invoices = collect([$pemesananDiamond]);
                $isSearched = true; // Menandakan bahwa ini hasil pencarian
            } elseif ($pemesananJoki) {
                $invoices = collect([$pemesananJoki]);
                $isSearched = true; // Menandakan bahwa ini hasil pencarian
            } else {
                return view('customer.invoice', ['invoices' => collect(), 'error' => 'Nomor invoice tidak ditemukan.']);
            }
        } else {
            $pemesananDiamonds = pemesananDiamond::latest()->take(5)->get();
            $pemesananJokis = pemesananJoki::latest()->take(5)->get();
            $invoices = $pemesananDiamonds->merge($pemesananJokis);
            $invoices = $invoices->sortByDesc('created_at')->take(10);
        }

        return view('customer.invoice', compact('invoices', 'isSearched','user'))->with([
            'maskId' => [$this, 'maskId'],
            'maskNoHP' => [$this, 'maskNoHP']
        ]);
    }

    function maskId($id)
    {
        $length = strlen($id);
        $maskedId = substr_replace($id, str_repeat('*', $length - 2), 1, $length - 1);
        return '' . $maskedId . substr($id, -1);
    }

    function maskNoHP($no_hp)
    {
        $length = strlen($no_hp);
        $maskedId = substr_replace($no_hp, str_repeat('*', $length - 2), 1, $length - 1);
        return '' . $maskedId . substr($no_hp, -1);
    }
}

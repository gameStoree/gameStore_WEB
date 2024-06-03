<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pemesananJoki;
use Illuminate\Http\Request;

class jokiRankInvoiceController extends Controller
{
    public function index(Request $request, $id)
    {
        $pemesanan = pemesananJoki::findOrFail($id);
        $snapToken = $request->input('snapToken');

        return view('customer.jokiRankInvoice', compact('pemesanan', 'snapToken'));
    }

    public function updateStatus(Request $request)
    {
        $pemesanan = pemesananJoki::findOrFail($request->id);
        $pemesanan->update(['status' => 'Lunas']);

        return response()->json(['message' => 'Status updated to Lunas successfully']);
    }
}

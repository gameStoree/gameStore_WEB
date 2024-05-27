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

    public function updateStatus(string $id)
    {
        // Find the order by ID, if not found it will throw a 404 error
        $pemesanan = pemesananJoki::findOrFail($id);

        // Update the order status to 'paid'
        $pemesanan->update(['status' => 'Lunas']);
    }
}

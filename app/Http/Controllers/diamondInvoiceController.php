<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesananDiamond;
use App\Http\Controllers\Controller;

class diamondInvoiceController extends Controller
{
    public function index(Request $request, $id)
    {
        $pemesanan = pemesananDiamond::findOrFail($id);
        $snapToken = $request->input('snapToken');

        return view('customer.diamondInvoice', compact('pemesanan', 'snapToken'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = pemesananDiamond::findOrFail($id);

        // Update the order status to 'paid'
        $order->update(['status' => 'Lunas']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesananDiamond;
use App\Http\Controllers\Controller;

class diamondInvoiceController extends Controller
{
    public function index(Request $request, $id)
    {
        $user = auth()->user();
        $pemesanan = pemesananDiamond::findOrFail($id);
        $snapToken = $request->input('snapToken');

        return view('customer.diamondInvoice', compact('pemesanan', 'snapToken','user'));
    }

    public function updateStatus(Request $request)
    {
        $pemesanan = pemesananDiamond::findOrFail($request->id);
        $pemesanan->update(['status' => 'Lunas']);

        return response()->json(['message' => 'Status updated to Lunas successfully']);
    }
}

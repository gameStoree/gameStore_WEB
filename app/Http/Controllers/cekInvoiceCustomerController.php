<?php

namespace App\Http\Controllers;

use App\Models\pemesananDiamond;
use Illuminate\Http\Request;

class cekInvoiceCustomerController extends Controller
{
    public function index()
    {
        $pemesananDiamonds = pemesananDiamond::all();
        return view('customer.invoice', compact('pemesananDiamonds'));
    }
}


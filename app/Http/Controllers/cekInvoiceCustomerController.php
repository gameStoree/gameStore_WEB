<?php

namespace App\Http\Controllers;

use App\Models\pemesananDiamond;
use Illuminate\Http\Request;

class cekInvoiceCustomerController extends Controller
{
    public function index()
    {
        $pemesananDiamonds = pemesananDiamond::take(10)->get();
        return view('customer.invoice', compact('pemesananDiamonds'));
    }
}


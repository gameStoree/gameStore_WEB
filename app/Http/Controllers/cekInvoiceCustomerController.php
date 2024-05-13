<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cekInvoiceCustomerController extends Controller
{
    public function index() {
        return view('customer.cekInvoice');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesanDiamondCustomerController extends Controller
{
    public function index() {
        return view('customer.pesanDiamond');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardCustomerController extends Controller
{
    public function index() {
        return view('customer.Beranda');
    }
}

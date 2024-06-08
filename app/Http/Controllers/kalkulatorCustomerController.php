<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulatorCustomerController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('customer.kalkulator', compact('user'));
    }
}


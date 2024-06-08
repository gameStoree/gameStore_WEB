<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hubungiKamiCustomerController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('customer.hubungiKami', compact('user'));
    }
}

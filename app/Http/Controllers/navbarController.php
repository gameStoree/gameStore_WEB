<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class navbarController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('cust', compact('user'));
    }
}

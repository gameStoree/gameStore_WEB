<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index() {
        return view('adminDev.dashboard.index', [
            'active' => 'dashboard',
            'judul' => 'DASHBOARD',
        ]);
    }
}

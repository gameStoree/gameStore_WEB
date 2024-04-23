<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardWorkerController extends Controller
{
    public function index()
    {
        return view('worker.dashboardWorker.index', [
            'active' => 'dashboardWorker',
            'judul' => 'DASHBOARD WORKER'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesananJoki;
use Illuminate\Support\Facades\DB;

class dashboardWorkerController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $jokiBelumDiambilCount = pemesananJoki::where('status', 'Lunas')->count();
        $jokiProgress = pemesananJoki::where('status', 'Progress')->where('id_worker', $user->id)->count();
        $jokiDone = pemesananJoki::where('status', 'Done')->where('id_worker', $user->id)->count();
        $historyPengerjaan = DB::table('pemesanan_jokis')
            ->join('joki_m_l', 'pemesanan_jokis.id_paket', '=', 'joki_m_l.id')
            ->where('id_worker', $user->id)
            ->orderBy('pemesanan_jokis.created_at', 'desc')
            ->take(5)
            ->select('pemesanan_jokis.*', 'joki_m_l.nama_paket', 'joki_m_l.joki_rank')
            ->get();

        return view('worker.dashboardWorker.index', [
            'active' => 'dashboardWorker',
            'judul' => 'DASHBOARD WORKER',
            'jokiBelumDiambilCount' => $jokiBelumDiambilCount,
            'jokiProgress' => $jokiProgress,
            'jokiDone' => $jokiDone,
            'historyPengerjaan' => $historyPengerjaan
        ]);
    }
}

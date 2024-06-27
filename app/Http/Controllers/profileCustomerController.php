<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pemesananDiamond;
use App\Models\pemesananJoki;

class profileCustomerController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        // Fetch filters from the request
        $status = $request->input('status');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Fetch diamond transactions for the logged-in user with filters
        $diamondQuery = pemesananDiamond::where('id_user', $user->id);
        $jokiQuery = pemesananJoki::where('id_user', $user->id);

        if ($status) {
            $diamondQuery->where('status', $status);
            $jokiQuery->where('status', $status);
        }

        if ($startDate) {
            $diamondQuery->whereDate('created_at', '>=', $startDate);
            $jokiQuery->whereDate('created_at', '>=', $startDate);
        }

        if ($endDate) {
            $diamondQuery->whereDate('created_at', '<=', $endDate);
            $jokiQuery->whereDate('created_at', '<=', $endDate);
        }

        $diamondTransactions = $diamondQuery->get();
        $jokiTransactions = $jokiQuery->get();

        // Fetch diamond transactions for the logged-in user
        $diamondTransactions = pemesananDiamond::where('id_user', $user->id)->get();

        // Fetch joki transactions for the logged-in user
        $jokiTransactions = pemesananJoki::where('id_user', $user->id)->get();

        // Calculate the total number of transactions
        $totalTransactions = $diamondTransactions->count() + $jokiTransactions->count();

        // Fetch transactions with status "Belum Bayar"
        $unpaidDiamondTransactions = pemesananDiamond::where('id_user', $user->id)->where('status', 'Belum Bayar')->count();
        $unpaidJokiTransactions = pemesananJoki::where('id_user', $user->id)->where('status', 'Belum Bayar')->count();

        // Total unpaid transactions
        $totalUnpaidTransactions = $unpaidDiamondTransactions + $unpaidJokiTransactions;

        // Fetch transactions with status "Lunas"
        $paidDiamondTransactions = pemesananDiamond::where('id_user', $user->id)->where('status', 'Lunas')->count();
        $paidJokiTransactions = pemesananJoki::where('id_user', $user->id)->where('status', 'Lunas')->count();

        // Total paid transactions
        $totalPaidTransactions = $paidDiamondTransactions + $paidJokiTransactions;

        // Fetch transactions with status "Joki Done"
        $jokiDoneTransactions = pemesananJoki::where('id_user', $user->id)->where('status', 'Done')->count();

        $joki = pemesananJoki::select('pemesanan_jokis.*', 'joki_m_l.nama_paket')
            ->join('joki', 'pemesanan_joki.id_paket', '=', 'joki_m_l.id');

        return view('customer.profileCustomer', [
            'user' => $user,
            'totalTransactions' => $totalTransactions,
            'totalUnpaidTransactions' => $totalUnpaidTransactions,
            'totalPaidTransactions' => $totalPaidTransactions,
            'jokiDoneTransactions' => $jokiDoneTransactions,
            'diamondTransactions' => $diamondTransactions,
            'jokiTransactions' => $jokiTransactions,
            'joki' => $joki
        ]);
    }
}

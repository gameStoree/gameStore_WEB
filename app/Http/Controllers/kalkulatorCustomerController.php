<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulatorCustomerController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('customer.kalkulator', compact('user'));
    }

    public function calculate(Request $request) {
        $request->validate([
            'total_match' => 'required|integer|min:0',
            'total_winrate' => 'required|numeric|min:0|max:100',
            'winrate_request' => 'required|numeric|min:0|max:100'
        ]);

        $total_match = $request->input('total_match');
        $total_winrate = $request->input('total_winrate');
        $winrate_request = $request->input('winrate_request');

        if ($winrate_request <= $total_winrate) {
            return redirect()->back()->with('error', 'Target win rate harus lebih tinggi dari win rate saat ini.');
        }

        $current_wins = ($total_winrate / 100) * $total_match;
        $required_matches = ($winrate_request * $total_match - 100 * $current_wins) / (100 - $winrate_request);

        return redirect()->back()->with('required_matches', ceil($required_matches));
    }
}


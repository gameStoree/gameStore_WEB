<?php








// // <!-- <?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\JokiML;
use Illuminate\Http\Request;

class JokiRankController extends Controller
{
    public function index()
    {
        // Mengambil semua data joki rank dari database
        $jokiRanks = JokiML::all();

        // Mengembalikan data dalam bentuk JSON
        return response()->json([
            'message' => 'Sukses',
            'data' => $jokiRanks
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

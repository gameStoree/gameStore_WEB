<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiMlController extends Controller
{
    // public function index(){
    //     $response = Http::get("https://api.isan.eu.org/nickname/ml", [
    //         'id' => ,
    //         'zone' => 2549,
    //     ]);
    //     dd(json_decode($response));
    // }

    public function tampilan(){
        return view('worker.apiMl.index', [
            'judul' => 'API ML'
        ]);
    }
}

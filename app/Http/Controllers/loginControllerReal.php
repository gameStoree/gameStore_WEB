<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginControllerReal extends Controller
{
    public function index() {
        return view('login.loginAll');
        }
}

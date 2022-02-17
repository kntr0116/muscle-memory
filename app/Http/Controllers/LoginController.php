<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $param = ['user' => $user];
        return view('main.index', $param);
    }
}

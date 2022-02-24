<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = DB::select('select * from posts');
        return view('main.index', ['items' => $items]);
    }
}

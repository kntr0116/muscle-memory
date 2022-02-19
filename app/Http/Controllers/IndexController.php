<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from posts');
        return view('main.index', ['items' => $items]);
    }
}

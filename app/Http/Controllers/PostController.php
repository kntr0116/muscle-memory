<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function add(Request $request)
    {
        return view('post.add');
    }

    public function create(Request $request)
    {
        $name = Auth::user()->name;
        $param = [
            'user_name' => $name,
            'content' => $request->content,
        ];
        DB::insert('insert into posts (user_name, content) values (:user_name, :content)', $param);
        return redirect('/');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('posts')->where('id', $id)->first();
        return view('post.show', ['item' => $item]);
    }

    public function del(Request $request)
    {
        $id = $request->id;
        $item = DB::table('posts')->where('id', $id)->first();
        return view('post.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from posts where id = :id', $param);
        return redirect('/');
    }
}

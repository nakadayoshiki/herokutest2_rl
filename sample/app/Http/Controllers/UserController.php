<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $items = user::all();
        return view('posts.users',["items" => $items]);
    }

    public function find(Request $request)
    {
      return view('posts.find',['input' => '']);
    }

    public function serch(Request $request)
    {
      $item = User::find($request->input);
      $param = ['input' => $request->input, 'item' => $item];
      return view('posts.find', $param);
    }

//...........
}

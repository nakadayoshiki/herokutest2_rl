<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keizibanController extends Controller
{
    public function index(){
      return view('keiziban');
    }
}

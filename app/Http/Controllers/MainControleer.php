<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControleer extends Controller
{
    public function index(){
        return view('admin');
    }
}

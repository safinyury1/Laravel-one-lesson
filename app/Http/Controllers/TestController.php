<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function second(){
        $name = "Yura";
        $arr = ["name" => "Yura", "mark" =>4, "isAdmin" => true];
        return view ('second', compact('name', 'arr'));
    }

    public function third(){
        return view('third');
    }
}
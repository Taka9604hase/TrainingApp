<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function index()
    {
        return view('Result.result_select');
    }
    
    public function menu1()
    {
        return view('Result.resultmenu1');
    }
    
    public function condition()
    {
        return view('Result.condition');
    }
    
    public function outcome()
    {
        return view('Result.outcome');
    }
    
}

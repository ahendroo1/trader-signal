<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function signal(){
        
        return view('front.signal');

    }
    public function content(){
        
        return view('front.signal_create');
    }
}
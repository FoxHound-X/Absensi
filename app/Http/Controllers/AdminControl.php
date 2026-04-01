<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function index(){
        return view('admin')->with('nama','Setia');
    }

    public function jurusan(){
        
    }
}

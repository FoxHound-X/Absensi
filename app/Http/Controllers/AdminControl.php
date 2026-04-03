<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;

// use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function index(){
        $datajurusan = Jurusan::paginate(10);
        return view('admin', compact('datajurusan'));
    }

    public function DeleteJurusan($id) {
        $jurusan = Jurusan::find($id);
        $jurusan -> delete();

        return reidrect()->back();
    }
}

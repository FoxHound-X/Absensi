<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function StoreData(Request $request){
        $validated = $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'kode_jurusan' => 'required|string|max:100',
        ]);

        $data = Jurusan::create($validated);

        return response()->json([
            'message' => 'Data Berhasil Disimpan',
            'data' => $data
        ], 201);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function data()
    {
        return view('matkul/data_matkul');
    }

    public function add()
    {
        return view('matkul/add_matkul');
    }

    public function edit($kode, $nama)
    {
        return view('matkul/edit_matkul', compact('kode','nama'));
    }
    public function hasil(Request $request)
    {
       $kode=$request->input('kode');
       $nama=$request->input('nama');
        return view('matkul/hasil_matkul', compact('kode','nama'));
    }

}

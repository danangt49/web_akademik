<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function data()
    {
        return view('dosen/data_dosen');
    }

    public function add()
    {
        return view('dosen/add_dosen');
    }
    public function edit($nip, $nama)
    {
        return view('dosen/edit_dosen', compact('nip','nama'));
    }
    public function hasil(Request $request)
    {
       $nip=$request->input('nip');
       $nama=$request->input('nama');
        return view('dosen/hasil_dosen', compact('nip','nama'));
    }
    public function details($nip, $nama)
    {
        return view('dosen/details_dosen', compact('nip','nama'));
    }
}

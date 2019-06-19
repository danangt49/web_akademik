<?php

namespace App\Http\Controllers;

use App\Tmahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function data()
    {
        $mahasiswa = Tmahasiswa::all();

        return view('mahasiswa/data_mahasiswa', compact('mahasiswa'));
    }


    public function add()
    {
        $input= new Tmahasiswa();
        return view('mahasiswa/add_mahasiswa', compact('mahasiswa'));
    }
    public function hasil(Request $request)
    {   
       
        $input= new Tmahasiswa();
       
       $input->input_nim=$request->input_nim;
       $input->input_nama=$request->input_nama;
       $input->jk=$request->jk;
       $input->input_no=$request->input_no;
       if($input->save()){
        return redirect()->to('mahasiswa/data_mahasiswa') ;
       }else{
        return view('mahasiswa/add_mahasiswa');
       }
    }


    public function edit($id)
    {
        $edit = Tmahasiswa::find($id);
        return view('mahasiswa/edit_mahasiswa', compact('edit'));
    }
    public function hasiledit(Request $request, $id)
    {
       $update= Tmahasiswa::find($id);

       $update->input_nim=$request->input_nim;
       $update->input_nama=$request->input_nama;
       $update->jk=$request->jk;
       $update->input_no=$request->input_no;
       $update->update();
        return redirect('mahasiswa/data_mahasiswa');
    }


    public function delete($id)
    {
        $delete=Tmahasiswa::find($id);
        $delete->delete();
        return redirect('mahasiswa/data_mahasiswa');
    }

    public function details()
    {
        $mahasiswa = Tmahasiswa::all();
        return view('mahasiswa/details_mahasiswa', compact('mahasiswa'));
    }
}

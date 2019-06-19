@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Tambahkan Data Matakuliah, </h1>
    <form action="{{url('matkul/save_matkul')}}" method="POST"> 
    {{ csrf_field() }}
     <div class="form-group">
        <label for="kode">Kode</label>
        <input type="text" class="form-control" id="kode" name="kode"> 
     </div>
     <div class="form-group">
       <label for="matkul">Nama Matakuliah</label><br/>
       <select>
         <option value="mtk" name="mtk">Matematika</option>
         <option value="Bi" name="Bi">Bahasa Inggris</option>
         <option value="Bin" name="Bin">Bahasa Indonesia</option>
         <option value="fs" name="fs">Fisika</option>
       </select>
     </div>
     <div class="form-group">
        <label for="nama">Nama Dosen</label>
        <input type="text" class="form-control" id="nama" name="nama">
     </div>
     <div class="form-group">
        <label for="input_sks">Jumlah Sks</label><br /> 
        <input type="radio" name="sks" id="1" value="1" name="1">1
        <label class="radio-inline">
        <input type="radio" name="sks" id="1" value="2" name="2"> 2
        <label class="radio-inline">
        <input type="radio" name="sks" id="1" value="3" name="3">3
        </label>
     </div>
     <div class="form-group">
       <label for="ruang">Ruang</label>
       <input type="text" class="form-control" id="ruang" name="ruang" >
     </div>
  <button type="submit" class="btn btn-default">Submit</button></form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection
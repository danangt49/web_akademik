@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Edit Data Matakuliah, </h1>
    <form action="{{url('matkul/hasil_matkul')}}" method="POST"> 
    {{ csrf_field() }}
    <div class="form-group">
        <label for="input_kode">Kode</label>
        <input type="text" class="form-control" id="kode" name="kode" value="{{$kode}}"> 
     </div>
     <div class="form-group">
       <label for="input_matkul">Nama Matakuliah</label><br/>
       <select>
         <option value="mtk">Matematika</option>
         <option value="Bi">Bahasa Inggris</option>
         <option value="Bin">Bahasa Indonesia</option>
         <option value="fs">Fisika</option>
       </select>
     </div>
     <div class="form-group">
        <label for="input_nama">Nama Dosen</label>
        <input type="text" class="form-control" id="input_nama" name="nama" value="{{$nama}}">
     </div>
     <div class="form-group">
        <label for="input_sks">Jumlah Sks</label><br /> 
        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" name="1">1
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" name="2"> 2
        <label class="radio-inline">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="3" name="3">3
        </label>
     </div>
     <div class="form-group">
       <label for="input_ruang">Ruang</label>
       <input type="text" class="form-control" id="input_ruang" name="input_ruang" >
     </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection
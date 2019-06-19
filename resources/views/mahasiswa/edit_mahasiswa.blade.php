@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6"><h1>Edit Data Mahasiswa</h1>
<form action="{{url('mahasiswa/update_mahasiswa/'.$edit->id)}}" method="POST"> 
{{ csrf_field() }}
  <div class="form-group">
    <label for="input_nim">Nim</label>
    <input type="text" class="form-control" id="input_nim" name="input_nim" value="{{$edit->input_nim}}">
  </div>
  <div class="form-group">
    <label for="input_nama">Nama</label>
    <input type="text" class="form-control" id="input_nama" name="input_nama" value="{{$edit->input_nama}}">
  </div>
  <div class="form-group">
  <label for="input_jk">Jenis Kelamin</label><br />
  <input type="radio" name="jk" id="inlineRadio1" value="laki-laki"{{$edit->jk == 'Laki-laki' ? 'checked' : ''}}> Laki-laki
    <label class="radio-inline">
     <input type="radio" name="jk" id="inlineRadio2" value="Perempuan" {{$edit->jk == 'Perempuan' ? 'checked' : ''}}> Perempuan
    </label>
  </div>
  <div class="form-group">
    <label for="input_no">No.Telp</label>
    <input type="text" class="form-control" id="input_no" name="input_no" value="{{$edit->input_no}}">
  </div>
  <button type="submit" class="btn btn-default">Simpan Perubahan</button>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection
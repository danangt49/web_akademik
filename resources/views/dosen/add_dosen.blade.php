@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Tambahkan Data Dosen, </h1>
    <form action="{{url('dosen/save_dosen')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
       <label for="nip">NIP</label>
       <input type="text" class="form-control" id="nip" name="nip">
    </div>
    <div class="form-group">
       <label for="nama">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="form-group">
       <label for="input_jk">Jenis Kelamin</label><br />
       <input type="radio" name="jk" id="1" value="Laki-Laki"> Laki-laki
       <label class="radio-inline">
       <input type="radio" name="jk" id="1" value="Perempuan"> Perempuan
       </label>
    </div>
     <div class="form-group">
     <label for="mk">Mata Kuliah</label><br/>
     <select>
       <option value="mtk" name="1">Matematika</option>
       <option value="Bi" name="2">Bahasa Inggris</option>
       <option value="Bin" name="3">Bahasa Indonesia</option>
       <option value="fs" name="4">Fisika</option>
     </select>
     </div>
     <div class="form-group">
        <label for="no">No.Telp</label>
        <input type="text" class="form-control" id="no" name="no">
      </div>
     <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" rows="3" id="alamat" name="alamat" ></textarea>
      </div>
  <button type="submit" class="btn btn-default">Submit</button></form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection
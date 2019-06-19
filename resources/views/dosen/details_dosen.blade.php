@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Detail Dosen</h1>
  <table class="table table-bordered table-striped table-hover">
			<thead>
					<th>Nip</th>
					<th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Mata Kuliah</th>
                    <th>No.Telp</th>	
                    <th>Alamat</th>		
			</thead>
			<tbody>
                <td>{{$nip}}</td>
				<td>{{$nama}}</td>
                <td>Laki-laki</td>
				<td>Fisika</td>
                <td>081111192</td>
                <td>Jalan Magelang</td>
			</tbody>
		</table>
  </div>
  <div class="col-sm-3"></div>
</div> 

@endsection
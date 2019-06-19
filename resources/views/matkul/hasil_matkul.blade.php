@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">	
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
		<h1>MATA KULIAH SEMESTER GENAP</h1>
		<a href= "{{url('matkul/add_matkul')}}" class="btn btn-info" role="button" >ADD</a>
			<thead>
				<tr>
					<th>Kode</th>
					<th>Nama Matakuliah</th>
					<th>Nama Dosen Pengampu</th>
					<th>Jumlah Sks</th>
                    <th>Operasi</th>				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$kode}}</td>
					<td></td>
                    <td>{{$nama}}</td>
					<td></td>
					<td>
						<a href="{{url('matkul/edit_matkul')}}/{{ $kode }}/{{$nama}}"  class="btn btn-warning" role="button">Edit</a>
						<a href="{{url('matkul/delete_matkul')}}"   class="btn btn-danger" role="button">Hapus</a>
						<a href="{{url('matkul/details_matkul')}}"  class="btn btn-primary" role="button">Details</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-2"></div>
	</div>
@endsection
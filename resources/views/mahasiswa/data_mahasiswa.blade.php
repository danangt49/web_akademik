@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
		<h1> Data Mahasiswa</h1>
		<a href= "{{url('mahasiswa/add_mahasiswa')}}" class="btn btn-info" role="button" >ADD</a>	
		<thead>
				<tr>
					<th>Nim</th>
					<th>Nama</th>
                    <th>Operasi</th>				
				</tr>
			</thead>
			<tbody>
			@foreach ($mahasiswa as $mhs)
				<tr>
					<td>{{ $mhs->input_nim }}</td>
					<td>{{ $mhs->input_nama }}</td>
					<td>{{ $mhs->jk }}</td>
					<td>
						<a href="{{url('mahasiswa/edit_mahasiswa')}}/{{ $mhs->id }}"  class="btn btn-warning" role="button">Edit</a>
						<a href="{{url('mahasiswa/delete_mahasiswa')}}/{{ $mhs->id }}"   class="btn btn-danger" role="button">Hapus</a>
						<a href="{{url('mahasiswa/details_mahasiswa')}}"  class="btn btn-primary" role="button">Details</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-sm-3"></div>
</div>
@endsection
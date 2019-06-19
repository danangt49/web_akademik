@extends('layout.app')
@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Detail Mahasiswa</h1>
  <table class="table table-bordered table-striped table-hover">
			<thead>
					<th>Nim</th>
					<th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>No</th>				
			</thead>
			<tbody>
			@foreach ($mahasiswa as $mhs)
					<td>{{ $mhs->input_nim }}</td>
					<td>{{ $mhs->input_nim }}</td>
          <td>{{ $mhs->jk }}</td>
					<td>{{ $mhs->input_no }}</td>
					@endforeach
			</tbody>
		</table>
  </div>
  <div class="col-sm-3"></div>
</div> 

@endsection
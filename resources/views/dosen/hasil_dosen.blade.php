@extends('layouts.app')

@section('content')
<table class="table table-bordered table-striped table-hover">
		<h1>Nama-nama Dosen</h1>
			<a href= "{{url('dosen/add_dosen')}}" class="btn btn-info" role="button" >ADD</a>
			<thead>
				<tr>
					<th>NIP</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Mata Kuliah</th>
                    <th>Operasi</th>				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$nip}}</td>
					<td>{{$nama}}</td>
                    <td></td>
					<td></td>
					<td>
						<a href="{{url('dosen/edit_dosen')}}/{{ $nip }}/{{$nama}}"  class="btn btn-warning" role="button">Edit</a>
						<a href="{{url('dosen/delete_dosen')}}"   class="btn btn-danger" role="button">Hapus</a>
						<a href="{{url('dosen/details_dosen')}}/{{ $nip }}/{{$nama}}"  class="btn btn-primary" role="button">Details</a>
					</td>
				</tr>
			</tbody>
		</table>
@endsection
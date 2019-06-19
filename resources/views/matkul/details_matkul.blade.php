@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6"><h1>Detail Mata Kuliah</h1>
  <table class="table table-bordered table-striped table-hover">
			<thead>
                <th>Kode</th>
				<th>Nama Matakuliah</th>
				<th>Nama Dosen Pengampu</th>
				<th>Jumlah Sks</th>	
                <th>Ruang</th>
			</thead>
			<tbody>
                <td>TI2327</td>
				<td>Fisika</td>
                <td>Subandi</td>
				<td>3</td>
                <td>T.3.1</td>
			</tbody>
		</table>
  </div>
  <div class="col-sm-3"></div>
</div> 

@endsection
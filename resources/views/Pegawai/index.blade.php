@extends('template.layouts.app')
@section('content')
<div class="page-wrapper">
<div class="container-fluid">
	<div class="row">
	<div class="col-12">
		<div class="card">
		<div class="card-body">
	        <h4 class="card-title">Data Pegawai</h4>
	        <h6 class="card-subtitle">Data Pegawai Restgo</h6>
	        <div class="table-responsive m-t-40">
	            <table id="myTable" class="table table-bordered table-striped">
	                <thead>
	                    <tr>
							<th>Nama Pegawai</th>
							<th>Umur</th>
							<th>Jenis Kelamin</th>
							<th></th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
	                </thead>

	       			@foreach($pegawai as $key)

					<tbody>
						<td>{{$key->nama_pegawai}}</td>
						<td>{{$key->umur_pegawai}}</td>
						<td>{{$key->jenis_kelamin}}</td>
						<td></td>
						<td>{{$key->alamat}}</td>
						<td>
							<a href="{{route('pegawai.edit',[$key->id])}}"><button>Edit</button></a>
							<a href="{{route('pegawai.delete',[$key->id])}}" onclick="return confirm('Hapus?')"><button>Hapus</button></a>
						</td>
					</tbody>
					@endforeach
	            </table>
	        </div>
	    </div>
		</div>
	</div>
</div>
</div>
</div>
@endsection



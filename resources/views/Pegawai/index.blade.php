<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
<a href="{{url('pegawai/create')}}"><button>Tambah</button></a>
<table>
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

</body>
</html>
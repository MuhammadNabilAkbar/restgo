<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form action="{{ url('pegawai/update') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<input type="hidden" name="id" value="{{$pegawai->id}}"><br>
<input type="text" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}"><br>
<input type="number" name="umur_pegawai" value="{{$pegawai->umur_pegawai}}"><br>
@if($pegawai->jenis_kelamin == 'Male')	
<input type="radio" name="jenis_kelamin" value="Male" checked>Male
<input type="radio" name="jenis_kelamin" value="Female">Female
@else
<input type="radio" name="jenis_kelamin" value="Male">Male
<input type="radio" name="jenis_kelamin" value="Female" checked>Female
@endif
<br>
<label>
Change File.
</label><br>
<input type="file" name="foto_pegawai" value=""><br>	
<textarea type="text" name="alamat">{{$pegawai->alamat}}</textarea><br>
<button type="submit">Simpan</button>
</form>
</body>
</html>
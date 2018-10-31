<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form action="{{ url('pegawai/save') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="text" name="nama_pegawai">	
<input type="number" name="umur_pegawai">		

<input type="radio" name="jenis_kelamin" value="Male">Male
<input type="radio" name="jenis_kelamin" value="Female">Female
<input type="file" name="foto_pegawai">
<textarea type="text" name="alamat"></textarea>	
<button type="submit">Simpan</button>
</form>
</body>
</html>
@extends('layouts.jersey')
@section('laracontent')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Pembeli</h3>

	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pembeli/store1" method="post">
		{{ csrf_field() }}
		
		<label style="font-family=times new roman">Nama Pelanggan</label> <input class="form-control" type="text" name="nama_pelanggan" required="required"> <br/>
		<label style="font-family=times new roman">Alamat</label> <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
		<label style="font-family=times new roman">No Telp </label><input class="form-control" type="text" name="no_telp" required="required"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>

</body>
@endsection
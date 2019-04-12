@extends('layouts.jersey')
@section('laracontent')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Edit Pembeli</h3>

	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pembeli as $p)
	<form action="/pembeli/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_pembeli }}"> <br/>
		
		<label style="font-family=times new roman">Nama Pelanggan<input class="form-control" type="text" required="required" name="nama_pelanggan" value="{{ $p->nama_pelanggan }}"> <br/>
		<label style="font-family=times new roman">Alamat <textarea class="form-control" required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
        <label style="font-family=times new roman">No Telp<input class="form-control" type="text" required="required" name="no_telp" value="{{ $p->no_telp }}"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach
		

</body>
@endsection
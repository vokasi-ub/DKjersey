@extends('layouts.jersey')
@section('laracontent')
<head>
	<title>Tes</title>
</head>
<body>

	
	<h3>Data Jersey</h3>

	<a href="/jersey2"> Kembali</a>
	
	<br/>
	<br/>



	

	<form action="/jersey2/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		
		nama_club_jersey <input class="form-control" type="text" name="nama_club_jersey" required="required"> <br/>
		ukuran jersey <input class="form-control" type="text" name="ukuran_jersey" required="required"> <br/>
		gambar jersey <input type="file" class="form-control" name="gambar_jersey" required="required"></textarea> <br/>
        deskripsi <textarea class="form-control" name="deskripsi" required="required"></textarea> <br/>
        harga <textarea  class="form-control" name="harga" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>

</body>
@endsection
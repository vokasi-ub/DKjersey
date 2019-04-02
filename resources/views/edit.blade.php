<!DOCTYPE html>
<html>
<head>
	<title>tes2</title>
</head>
<body>



	<a href="/jersey2"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($jersey2 as $p)
	<form action="/jersey2/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_jersey }}"> <br/>
		id_jersey <input type="text" name="id_jersey" value="{{$p->id_jersey}}" required="required"> <br/>
		nama_club_jersey <input type="text" name="nama_club_jersey" required="required"> <br/>
		ukuran jersey <input type="text" name="ukuran_jersey" required="required"> <br/>
		gambar jersey <textarea name="gambar_jersey" required="required"></textarea> <br/>
        deskripsi <textarea name="deskripsi" required="required"></textarea> <br/>
		harga <textarea required="required" name="harga">{{ $p->harga }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>
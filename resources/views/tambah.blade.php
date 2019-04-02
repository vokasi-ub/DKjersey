<!DOCTYPE html>
<html>
<head>
	<title>Tes</title>
</head>
<body>

	
	<h3>Data Jersey</h3>

	<a href="/jersey2"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/jersey2/store" method="post">
		{{ csrf_field() }}
		id_jersey <input type="text" name="id_jersey" required="required"> <br/>
		nama_club_jersey <input type="text" name="nama_club_jersey" required="required"> <br/>
		ukuran jersey <input type="text" name="ukuran_jersey" required="required"> <br/>
		gambar jersey <textarea name="gambar_jersey" required="required"></textarea> <br/>
        deskripsi <textarea name="deskripsi" required="required"></textarea> <br/>
        harga <textarea name="harga" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@extends('layouts.jersey')
@section('laracontent')
<head>
	<title>Tambah Transaksi</title>
</head>
<body>

	
	<h3>Data Transaksi</h3>

	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>


	

	<form action="/transaksi/addTransaksi" method="post">
		{{ csrf_field() }}
		
		

		<label style="font-family=times new roman">ID Pembeli <br>
		<select name="id_pembeli" id="" class="form-control">
		<option value="-" class="form-control"></option>
		@foreach($datapembeli as $pembeli)
		<option value="{{ $pembeli->id_pembeli }}" class="form-control">{{ $pembeli->nama_pelanggan}}</option>
		@endforeach
		</select> <br/>

		<label style="font-family=times new roman">Id Barang <br>
		<select name="id_jersey" id="" class="form-control">
		<option value="-" class="form-control"></option>
		@foreach($databarang as $jersey2)
		<option value="{{ $jersey2->id_jersey }}" class="form-control">{{ $jersey2->nama_club_jersey}}</option>
		@endforeach
		</select> <br/>
		
		<label style="font-family=times new roman">Tanggal Transaksi <input class="form-control" type="date" name="tanggal_transaksi" required="required"></textarea> <br/>
        <label style="font-family=times new roman">Quantity <input class="form-control" type="text" name="quantity" required="required"> <br/>
        <label style="font-family=times new roman">Total Harga <input class="form-control" type="text" name="total_harga" required="required"> <br/>
		<input type="submit"  value="Simpan Data" class="btn btn-success">
	</form>
 
</body>
@endsection


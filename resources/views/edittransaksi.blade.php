@extends('layouts.jersey')
@section('laracontent')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<h3>Edit Pegawai</h3>

	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/transaksi/update" method="post">		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $transaksi->id }}"> <br/>
		<label style="font-family=times new roman">id <input class= "form-control" type="text" required="required" name="id" value="{{$transaksi->id}}"> <br/>
		
		<label style="font-family=times new roman">Id Pembeli 
		<select name="id_pembeli" id="" class="form-control">
		<option value="-" class="form-control"></option>
		@foreach($datapembeli as $pembeli)
		<option value="{{ $pembeli->id_pembeli }}" class="form-control">{{ $pembeli->nama_pelanggan}}</option>
		@endforeach
		</select> <br/>
		
		<label style="font-family=times new roman">Id jersey 
		<select name="id_jersey" id="" class="form-control">
		<option value="-" class="form-control"></option>
		@foreach($databarang as $jersey2)
		<option value="{{ $jersey2->id_jersey }}" class="form-control">{{ $jersey2->nama_club_jersey}}</option>
		@endforeach
		</select> <br/>


		<label style="font-family=times new roman">Tanggal Transaksi <textarea class="form-control" required="required" name="tanggal_transaksi">{{ $transaksi->tanggal_transaksi }}</textarea> <br/>
        <label style="font-family=times new roman">Quantity <input type="text"class="form-control" required="required" name="quantity" value="{{ $transaksi->quantity }}"> <br/>
        <label style="font-family=times new roman">Total Harga <input type="text" class="form-control" required="required" name="total_harga" value="{{ $transaksi->total_harga}}"> <br/>
		<input type="submit" value="Update Data" class="btn-btn info">
	</form>


</body>
@endsection	
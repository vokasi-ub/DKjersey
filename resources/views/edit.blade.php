@extends('layouts.jersey')
@section('laracontent')



<img src="{{asset('/image/'.$jersey->gambar_jersey)}}"width="100px" height="70px">

	<form method="post" action="{{route('editjersey', $jersey->id_jersey) }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $jersey->id_jersey }}"> <br/>
		nama_club_jersey <input type="text" style="margin-left:40px" name="nama_club_jersey" value="{{$jersey->nama_club_jersey}}" required="required"> <br/><br/>
		ukuran jersey <input type="text" style="margin-left:70px" name="ukuran_jersey" value="{{$jersey->ukuran_jersey}}" required="required"> <br/><br/>
		gambar jersey <input type="file" class="form-control" name="gambar_jersey" style="margin-left:65px" required="required">{{$jersey->gambar_jersey}}</textarea> <br/><br/>
        deskripsi <textarea name="deskripsi" style="margin-left:100px" required="required"> {{$jersey->deskripsi}}></textarea> <br/><br/>
		harga <textarea required="required"  style="margin-left:120px"name="harga">{{ $jersey->harga }}</textarea> <br/><br/>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>


	@endsection
		

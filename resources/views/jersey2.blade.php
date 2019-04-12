@extends('layouts.jersey')
@section('laracontent')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                        
                               <h5>Tabel Jersey</h5>                      
                            </div>

                            <div class="box-tools">
                            <form action="{{route('mencari')}}">
                            <div class="input-group input-group-sm" style="width: 30%;">
                            <input type="text" name="row" class="form-control pull-right" placeholder="Silahkan Cari Data"  class="btn btn-info">

                            <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </form>
					        </div>
					        </div>



                            <div class="content table-responsive table-full-width">
                                <a href="jersey2/tambah"> + Tambah Jersey Baru</a>
                                <table class="table table-hover">
                                <tbody>
                                <tr>
                                <th>Id Jersey</th>
                                <th>nama Club</th>
                                <th>Ukuran Jersey</th>
                                <th>Gambar Jersey</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                                </tr>
                            @foreach ($datajersey as $row)
                                <tr>
                                    <td>{{ $row->id_jersey}}</td>
                                    <td>{{ $row->nama_club_jersey}}</td>
                                    <td>{{ $row->ukuran_jersey}}</td>
                                    <td><img src="{{asset('/image/'.$row->gambar_jersey)}}"width="100px" height="70px"></td>
                                    <td>{{ $row->deskripsi}}</td>
                                    <td>{{ $row->harga}}</td>
                                    <td><a href="/jersey2/edit/{{ $row->id_jersey }}" class="btn btn-info">Edit</a>
			                        <a href="/jersey2/hapus/{{ $row->id_jersey }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                   
                                    </tbody>
                                    </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        @endsection


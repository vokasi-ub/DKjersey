@extends('layouts.jersey')
@section('laracontent')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table</h4>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <a href="pembeli/tambah"> + Tambah Pembeli Baru</a>
                                <table class="table table-hover">
                                <tbody>
                                <tr>
                                <th>Id Pembeli</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>No_Telp</th>
                                <th>Aksi</th>
                                </tr>
                            @foreach ($datapembeli as $row)
                                <tr>
                                    <td>{{ $row->id_pembeli}}</td>
                                    <td>{{ $row->nama_pelanggan}}</td>
                                    <td>{{ $row->alamat}}</td>
                                    <td>{{ $row->no_telp}}</td>
                                    <td><a href="/pembeli/editpembeli/{{ $row->id_pembeli }} " class="btn btn-info">Edit</a>
			                        <a href="/pembeli/hapus/{{ $row->id_pembeli }}" class="btn btn-danger">Hapus</a>
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


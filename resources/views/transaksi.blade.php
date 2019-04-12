@extends('layouts.jersey')
@section('laracontent')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">Tabel Transaksi</h4>       
                            </div>
                            
                            <div class="box-tools">
                            <form action="{{route('search')}}">
                            <div class="input-group input-group-sm" style="width:200px">
                            <input type="text" name="q" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </form>
					</div>
					</div>
                
                            <div class="content table-responsive table-full-width">
                                <a href="transaksi/tambah"> + Tambah Transaksi Baru</a>
                                <table class="table table-hover">
                                <tbody>
                                <tr>
                                <th>Id</th>
                                <th>Id Pembeli</th>
                                <th>Id Jersey</th>
                                <th>Tanggal Transaksi</th>
                                <th>Quantity</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                                </tr>
                            @foreach ($datatransaksi as $row)
                                <tr>
                                    <td>{{ $row->id}}</td>
                                    <td>{{ $row->pelanggan->nama_pelanggan}}</td>
                                    <td>{{ $row->jersey->nama_club_jersey}}</td>
                                    <td>{{ $row->tanggal_transaksi}}</td>
                                    <td>{{ $row->quantity}}</td>
                                    <td>{{ $row->total_harga}}</td>
                                    <td><a href="/transaksi/edittransaksi/{{ $row->id}}" class="btn btn-info">Edit</a>
			                        <a href="/transaksi/hapustransaksi/{{ $row->id}}" class="btn btn-danger">Hapus</a>
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


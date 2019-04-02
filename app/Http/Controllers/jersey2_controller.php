<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Jersey2;
use DB;
use App\Quotation;

class jersey2_controller extends Controller
{
    //
    public function index()
    {
        $datajersey2 = Jersey2::all();
        return view('jersey2', compact('datajersey2'));
    }



    public function jersey()
    {
    	// mengambil data dari table jersey
    	$jersey = DB::table('jersey')->get();
 
    	// mengirim data pegawai ke view jersey
    	return view('jersey2',['jersey' => $jersey]);
 
    }

    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}


public function store(Request $request)
{

	DB::table('jersey')->insert([
		'id_jersey' => $request->id_jersey,
		'nama_club_jersey' => $request->nama_club_jersey,
		'ukuran_jersey' => $request->ukuran_jersey,
        'gambar_jersey' => $request->gambar_jersey,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga
	]);

	return redirect('/jersey2');

}

public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$jersey = DB::table('jersey')->where('id_jersey',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['jersey2' => $jersey]);
 

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('jersey')->where('id_jersey',$request->id)->update([
        'id_jersey' => $request->id_jersey,
		'nama_club_jersey' => $request->nama_club_jersey,
		'ukuran_jersey' => $request->ukuran_jersey,
        'gambar_jersey' => $request->gambar_jersey,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jersey2');
}

}

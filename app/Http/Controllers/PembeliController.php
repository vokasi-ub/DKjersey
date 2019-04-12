<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;
use DB;
use App\Quotation;

class PembeliController extends Controller
{
    
    public function index1()
    {
        $datapembeli = Pembeli::all();
        return view('pembeli', compact('datapembeli'));
    }

    
    
// method untuk menampilkan view form tambah pembeli
public function tambahpembeli()
{

	// memanggil view tambah
	return view('tambahpembeli');

}

// method untuk insert data ke table pembeli
public function store1(Request $request)
{
	// insert data ke table pembeli
	DB::table('pembeli')->insert([
		'id_pembeli' => $request->id_pembeli,
		'nama_pelanggan' => $request->nama_pelanggan,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp
	]);
	// alihkan halaman ke halaman pembeli
	return redirect('/pembeli');

}


//method EDIT
public function editpembeli($id)
{
	$pembeli = DB::table('pembeli')->where('id_pembeli',$id)->get();
	return view('editpembeli',['pembeli' => $pembeli]);

}
//method UPDATE
public function update(Request $request)
{
	DB::table('pembeli')->where('id_pembeli',$request->id)->update([
		
		'nama_pelanggan' => $request->nama_pelanggan,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pembeli');
}

// method Hapus
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pembeli')->where('id_pembeli',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pembeli');
}
    
}

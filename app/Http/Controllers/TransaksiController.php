<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use DB;
use App\Pembeli;
use App\Jersey2;
use App\Quotation;

class TransaksiController extends Controller
{
    //
    public function index2()
    {
		$datatransaksi = Transaksi::all();
		
		return view('transaksi', compact('datatransaksi'));
		
    }


    // method untuk menampilkan view form tambah pegawai
public function tambahtransaksi()
{

	// memanggil view tambah
		$datapembeli = Pembeli::all();
		$databarang =  Jersey2::all();
	return view('tambahtransaksi', compact('datapembeli', 'databarang'));
	

}

// method untuk insert data ke table pegawai
public function addTransaksi(Request $request)
{
	// insert data ke table pegawai
	DB::table('transaksi')->insert([
		
		'id_pembeli' => $request->id_pembeli,
		'id_jersey' => $request->id_pembeli,
        'tanggal_transaksi' => $request->tanggal_transaksi,
        'quantity' => $request->quantity,
        'total_harga' => $request->total_harga
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');

}



// method untuk edit data pegawai
public function edittransaksi($id)
{   
	// mengambil data pegawai berdasarkan id yang dipilih
	$transaksi = Transaksi::find($id);

	$datapembeli = Pembeli::All();
	$databarang =  Jersey2::All();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edittransaksi',compact('transaksi','datapembeli','databarang'));

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('transaksi')->where('id',$request->id)->update([
		'id' => $request->id,
		'id_pembeli' => $request->id_pembeli,
		'id_jersey' => $request->id_pembeli,
        'tanggal_transaksi' => $request->tanggal_transaksi,
        'quantity' => $request->quantity,
        'total_harga' => $request->total_harga
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
}

// method untuk hapus data pegawai
public function hapustransaksi($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('transaksi')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
}

public function search(Request $request)
    {
        $query = $request->get('q');
        $datatransaksi = Transaksi::where('nama_barang', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('transaksi', compact('datatransaksi', 'query'));
    }

}

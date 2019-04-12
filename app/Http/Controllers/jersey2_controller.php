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
        $datajersey = Jersey2::all();
        return view('jersey2', compact('datajersey'));
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

$imageName = time().'.'.$request->gambar_jersey->getClientOriginalExtension();
$request->gambar_jersey->move(public_path('image'), $imageName);

$datajersey = Jersey2::create([
'nama_club_jersey' => $request->input('nama_club_jersey'),
'ukuran_jersey' => $request->input('ukuran_jersey'),
'gambar_jersey' =>$imageName,
'deskripsi' => $request->input('deskripsi'),
'harga' => $request->input('harga')

]);


$datajersey->save();
return redirect('/jersey2');
}


public function edit($id_jersey)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$jersey = Jersey2::find($id_jersey);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit', compact('jersey'));
 

}

// update data 
public function update(Request $request)
{

	if(!empty($request->gambar_jersey)){
		$image = $request->file('gambar_jersey');
		$imageName = $image->getClientOriginalName();
		$image->move(public_path('image'), $imageName);

		Jersey2::where('id_jersey',$request->id)->update([
       
			'nama_club_jersey' => $request->nama_club_jersey,
			'ukuran_jersey' => $request->ukuran_jersey,
			'gambar_jersey' => $imageName,
			'deskripsi' => $request->deskripsi,
			'harga' => $request->harga
		]);


	}else {
	
	Jersey2::where('id_jersey',$request->id)->update([
       
		'nama_club_jersey' => $request->nama_club_jersey,
		'ukuran_jersey' => $request->ukuran_jersey,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga
	]);

	}
	
	return redirect('/jersey2');
}

// method untuk hapus data 
public function hapus($id)
{
	// menghapus data berdasarkan id yang dipilih
	DB::table('jersey')->where('id_jersey',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/jersey2');
}

public function cari(Request $request)
    {
        $query = $request->get('row');
        $datajersey = Jersey2::where('nama_club_jersey', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('jersey2', compact('datajersey', 'query'));
    }


	

}

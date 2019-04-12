<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    //
    protected $table = 'pembeli';
    public $timestamps=false; 
    protected $fillable=['id_pembeli', 'nama_pelanggan','nama_barang','alamat','no_telp'];
    
}

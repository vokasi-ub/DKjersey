<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jersey2 extends Model
{
    //
    protected $table = 'jersey';
    public $timestamps=false; 
    protected $primaryKey = 'id_jersey';
    protected $fillable=[ 'nama_club_jersey','gambar_jersey','ukuran_jersey','deskripsi','harga'];

    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

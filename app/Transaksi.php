<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pembeli;
use App\Jersey2;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';
    public $timestamps=false; 
    protected $fillable=['id','id_pembeli','id_jersey','tanggal_transaksi','quantity','total_harga'];

    public function jersey()
    {
        return $this->belongsTo(Jersey2::class,'id_jersey', 'id_jersey');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pembeli::class,'id_pembeli', 'id_pembeli');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jersey2 extends Model
{
    //
    protected $table = 'jersey';
    public $timestamps=false; 
    protected $fillable=['id_jersey', 'nama_club_jersey','gambar_jersey','deskripsi','harga'];
    
}

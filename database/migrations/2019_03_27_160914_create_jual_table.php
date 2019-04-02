<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->String('username');
            $table->String('password'); 
        });
   
   Schema::create('jersey', function (Blueprint $table) {
           $table->integer('id_jersey');
           $table->string('nama_club_jersey');
           $table->string('ukuran_jersey');
           $table->string('gambar_jersey');
           $table->string('deskripsi');
           $table->string('harga');
       });


       
        Schema::create('pembeli', function (Blueprint $table) {
            $table->integer('id_pembeli');
            $table->string('nama_pelanggan');
            $table->String('nama_barang');
            $table->string('alamat');
            $table->string('no_telp');
        });

       Schema::create('transaksi', function (Blueprint $table) {
           $table->integer('id');
           $table->string('id_pembeli');
           $table->String('nama_barang');
           $table->string('tanggal_transaksi');
           $table->string('quantity');
           $table->string('total_harga');
       });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jual');
    }
}

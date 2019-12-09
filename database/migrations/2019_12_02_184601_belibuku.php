<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Belibuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_terjual', function(Blueprint $table){
            $table->string('id_transaksi');
            $table->string('id_buku');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->string('kategori');
            $table->string('kuantitas');
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('barang_terjual');
    }
}

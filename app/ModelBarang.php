<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
    protected $table		= 'barang_masuk';

    protected $primarykey	= 'id_buku';

    protected $fillable		= [
    							'id_buku', 
							    'judul_buku', 
							    'penerbit', 
							    'tahun_terbit', 
							    'kategori', 
							    'kuantitas', 
							    'harga', 
							    'tanggalmasuk'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGudang extends Model
{
    protected $table		= 'gudang';

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

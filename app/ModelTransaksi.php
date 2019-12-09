<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransaksi extends Model
{
    protected $table		= 'barang_terjual';

    protected $primarykey	= 'id_transaksi';

    protected $fillable		= [
    							'id_transaksi',
    							'id_buku', 
							    'judul_buku', 
							    'penerbit', 
							    'tahun_terbit', 
							    'kategori', 
							    'kuantitas', 
							    'harga', 
							    'tanggalterjual'];
	public $timestamps		= false;
	public $incrementing	= true;
}

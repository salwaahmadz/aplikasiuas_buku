<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\ModelTransaksi;


class admin extends Controller
{
    public function tambahbuku(request $request){
    	DB::table('barang_masuk ,gudang')
    	->insert([
    		'judul_buku'	=> $request->judulbuku,
			'penerbit'		=> $request->penerbit,
			'tahun_terbit'	=> $request->tahunterbit,
			'kategori'		=> $request->kategoribarang,
			'kuantitas'		=> $request->kuantitasbarang,
			'harga'			=> $request->hargabarang
    	]);
    	return redirect('/katalog')->with('sukses', "Berhasil mendaftarkan barang!");
    }

    public function cetak_pdf()
    {
        $penjualan = ModelTransaksi::all();

        $pdf = PDF::loadview('lpenjualan',['penjualan'=>$penjualan]);
        // return $pdf->download('laporan-penjualan-pdf');
        $pdf->setPaper('A4', 'landscape');
        set_time_limit(300);
        return $pdf->stream('laporan.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelGudang;
use App\ModelTransaksi;
use DB;


class transaksi extends Controller
{

    // public function konfirmasip()
    // {
    // 	// return view('pelanggan.konfirmasipembelian');
    // }

    public function konfirmasip($id_buku)
    {
    	$belibuku = DB::table('gudang')->where('id_buku', $id_buku)->get();
    	// dd($belibuku);
    	return view('pelanggan.konfirmasipembelian', ['belibuku' => $belibuku]);

    	// $belibuku = ModelGudang::find($id_buku);
    	// return view('pelanggan.konfirmasipembelian', ['belibuku' => $belibuku]);
    }

    public function prosestransaksi(request $request)
    {
    	if ($request->bkuantitas <= 0) {
    		return redirect('/index')->with('gagal', "Jumlah barang minimal 1");
    	}else{
    		$kuantitas	= $request->bkuantitas;
    	};

    	// $proses = DB::table('barang_terjual')
    	// ->insert([
    	// 	'id_buku' 			=> $request->idbuku,
		   //  'judul_buku' 		=> $request->judulbuku,
		   //  'penerbit'	 		=> $request->penerbit,
		   //  'tahun_terbit'	 	=> $request->tahunterbit,
		   //  'kategori' 			=> $request->kategori,
		   //  'kuantitas' 		=> $request->bkuantitas,
		   //  'harga' 			=> $request->harga,
    	// ]);

    	$proses = new ModelTransaksi();
    	$proses->id_buku		= $request->idbuku;
    	$proses->judul_buku		= $request->judulbuku;
    	$proses->penerbit		= $request->penerbit;
    	$proses->tahun_terbit	= $request->tahunterbit;
    	$proses->kategori		= $request->kategori;
    	$proses->kuantitas		= $request->bkuantitas;
    	$proses->harga			= $request->harga;
    	$proses->save();
    	// if ($proses->save()) {
    	// 	return redirect('/invoice/'.$proses->id_transaksi);
    	// }
    	// dd($proses);
    	// return redirect('/invoice/'.$proses->id_transaksi);
    	return redirect('/invoice');
    }

    // public function invoice($id_transaksi){
    // 	$invoice = DB::table('barang_terjual')->('id_transaksi', $id_transaksi)->get();
    // 	return view('pelanggan.invoice', ['invoice' => $invoice]);
    // }

    public function invoice()
    {
    	// $invoice = DB::table('barang_terjual')
     //    ->where('id_transaksi', $id_transaksi)->get();

        // $invoice = DB::table('barang_terjual')->where('id_transaksi', $id_transaksi)->orderBy('id_transaksi', 'desc')->get();
    	
    	// return view('pelanggan.invoice', ['invoice' => $invoice]);
        return view('pelanggan.invoice');

    }

}

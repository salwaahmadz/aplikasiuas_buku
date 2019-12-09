<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ModelBarang;
use App\ModelGudang;
use App\ModelTransaksi;


class pelanggan extends Controller
{
    public function index()
    {
    	return view('pelanggan.indexp');
    }

    public function katalog()
    {
    	$katalogbuku	= ModelGudang::all();

    	return view('pelanggan.katalog', ['katalogbuku' => $katalogbuku]);
    }

    
}

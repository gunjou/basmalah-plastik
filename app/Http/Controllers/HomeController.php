<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $stocks = [
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000'],
        ];

        $pembelian=[
            ['no' => '3','nama_barang' => 'Barang A', 'jumlah_stock' => '', 'satuan'=>'', 'harga'=>'40.000']
        ];

        return view('home', compact('stocks','pembelian'));
    }
}

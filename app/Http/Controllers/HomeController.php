<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $stocks = [
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'Pack', 'harga'=>'40.000'],
            ['no' => '2','nama_barang' => 'Barang B', 'jumlah_stock' => '112', 'satuan'=>'Pack', 'harga'=>'40.000'],
            ['no' => '3','nama_barang' => 'Barang C', 'jumlah_stock' => '112', 'satuan'=>'Pack', 'harga'=>'40.000'],
            ['no' => '4','nama_barang' => 'Barang D', 'jumlah_stock' => '112', 'satuan'=>'Pack', 'harga'=>'40.000'],
            ['no' => '5','nama_barang' => 'Barang E', 'jumlah_stock' => '112', 'satuan'=>'Pack', 'harga'=>'40.000'],

        ];

        $pembelian=[
            ['jumlah_barang' => '3','nama_barang' => 'Barang A', 'harga'=>'RP. 40.000'],
            ['jumlah_barang' => '2','nama_barang' => 'Barang B', 'harga'=>'RP. 40.000'],
            ['jumlah_barang' => '3','nama_barang' => 'Barang A', 'harga'=>'RP. 40.000'],
            ['jumlah_barang' => '2','nama_barang' => 'Barang B', 'harga'=>'RP. 40.000'],
            ['jumlah_barang' => '1','nama_barang' => 'Barang C', 'harga'=>'RP. 40.000'],
            ['jumlah_barang' => '2','nama_barang' => 'Barang D', 'harga'=>'RP. 40.000'],
        ];

        return view('home', compact('stocks','pembelian'));
    }
}

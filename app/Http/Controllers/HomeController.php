<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
            ['jumlah_barang' => '3','nama_barang' => 'Barang A', 'harga'=>' 40.000'],
            ['jumlah_barang' => '2','nama_barang' => 'Barang B', 'harga'=>' 40.000'],
            ['jumlah_barang' => '3','nama_barang' => 'Barang A', 'harga'=>' 40.000'],
            ['jumlah_barang' => '2','nama_barang' => 'Barang B', 'harga'=>' 40.000'],
            ['jumlah_barang' => '1','nama_barang' => 'Barang C', 'harga'=>' 40.000'],
            ['jumlah_barang' => '2','nama_barang' => 'Barang D', 'harga'=>' 40.000'],
        ];

        
Carbon::setLocale('id');


        return view('pages.home', compact('stocks','pembelian'));
    }
}
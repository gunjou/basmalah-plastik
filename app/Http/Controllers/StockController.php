<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class stockController extends Controller
{
    //
    public function index()
    {
        // Dummy data users
        $stocks = [
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000', 'no_batch'=>'ID4567'],

        ];
        Carbon::setLocale('id');

        return view('pages.stock', compact('stocks'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HutangController extends Controller
{
    //
    public function index()
    {
        $hutangs = [
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000'],
            ['no' => '1','nama_barang' => 'Barang A', 'jumlah_stock' => '112', 'satuan'=>'pack', 'harga'=>'40.000'],
        ];

        return view('hutang', compact('hutangs'));
    }
}

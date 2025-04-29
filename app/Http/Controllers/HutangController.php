<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HutangController extends Controller
{
    //
    public function index()
    {
        $hutangs = [
            ['no' => '1','nama_pelanggan' => 'Gugun', 'jumlah_hutang' => 'Rp.10.000', 'status'=>'Belum Lunas'],
            ['no' => '2','nama_pelanggan' => 'Tama', 'jumlah_hutang' => 'Rp.34.000', 'status'=>'Belum Lunas'],
            ['no' => '3','nama_pelanggan' => 'Gibran', 'jumlah_hutang' => 'Rp.16.000', 'status'=>'Belum Lunas'],
            ['no' => '4','nama_pelanggan' => 'Pinkan', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
            ['no' => '5','nama_pelanggan' => 'A', 'jumlah_hutang' => 'Rp.10.000', 'status'=>'Belum Lunas'],
            ['no' => '6','nama_pelanggan' => 'B', 'jumlah_hutang' => 'Rp.34.000', 'status'=>'Belum Lunas'],
            ['no' => '7','nama_pelanggan' => 'C', 'jumlah_hutang' => 'Rp.16.000', 'status'=>'Belum Lunas'],
            ['no' => '8','nama_pelanggan' => 'D', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
            ['no' => '9','nama_pelanggan' => 'E', 'jumlah_hutang' => 'Rp.10.000', 'status'=>'Belum Lunas'],
            ['no' => '10','nama_pelanggan' => 'F', 'jumlah_hutang' => 'Rp.34.000', 'status'=>'Belum Lunas'],
            ['no' => '11','nama_pelanggan' => 'G', 'jumlah_hutang' => 'Rp.16.000', 'status'=>'Belum Lunas'],
            ['no' => '12','nama_pelanggan' => 'H', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
            ['no' => '13','nama_pelanggan' => 'I', 'jumlah_hutang' => 'Rp.10.000', 'status'=>'Belum Lunas'],
            ['no' => '14','nama_pelanggan' => 'J', 'jumlah_hutang' => 'Rp.34.000', 'status'=>'Belum Lunas'],
            ['no' => '15','nama_pelanggan' => 'K', 'jumlah_hutang' => 'Rp.16.000', 'status'=>'Belum Lunas'],
            ['no' => '16','nama_pelanggan' => 'L', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
        ];

        $detailHutang = [
            ['pencatatan' =>'12-03-2025','utang' =>'100.000','membayarkan' =>'-'],
            ['pencatatan' =>'13-03-2025','utang' =>'-','membayarkan' =>'10.000'],
            ['pencatatan' =>'14-03-2025','utang' =>'-','membayarkan' =>'10.000'],
    ];

        return view('pages.hutang', compact('hutangs','detailHutang'));
    }
}

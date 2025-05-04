<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HutangController extends Controller
{
    //
    public function index()
    {
        $hutangs = [
            ['no' => '1','nama_pelanggan' => 'Gugun','no_hp'=>'081234567987' ,'jumlah_hutang' => '10.000', 'status'=>'Belum Lunas'],
            ['no' => '2','nama_pelanggan' => 'Tama','no_hp'=>'081234567987','jumlah_hutang' => '34.000', 'status'=>'Belum Lunas'],
            ['no' => '3','nama_pelanggan' => 'Gibran','no_hp'=>'081234567987', 'jumlah_hutang' => '16.000', 'status'=>'Belum Lunas'],
            ['no' => '4','nama_pelanggan' => 'Pinkan','no_hp'=>'081234567987', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
            ['no' => '5','nama_pelanggan' => 'A','no_hp'=>'081234567987', 'jumlah_hutang' => '10.000', 'status'=>'Belum Lunas'],
            ['no' => '6','nama_pelanggan' => 'B','no_hp'=>'081234567987', 'jumlah_hutang' => '34.000', 'status'=>'Belum Lunas'],
            ['no' => '7','nama_pelanggan' => 'C','no_hp'=>'081234567987', 'jumlah_hutang' => '16.000', 'status'=>'Belum Lunas'],
            ['no' => '8','nama_pelanggan' => 'D','no_hp'=>'081234567987', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
            ['no' => '9','nama_pelanggan' => 'E','no_hp'=>'081234567987', 'jumlah_hutang' => '10.000', 'status'=>'Belum Lunas'],
            ['no' => '10','nama_pelanggan' => 'F','no_hp'=>'081234567987', 'jumlah_hutang' => '34.000', 'status'=>'Belum Lunas'],
            ['no' => '11','nama_pelanggan' => 'G','no_hp'=>'081234567987', 'jumlah_hutang' => '16.000', 'status'=>'Belum Lunas'],
            ['no' => '12','nama_pelanggan' => 'H','no_hp'=>'081234567987', 'jumlah_hutang' => '-', 'status'=>'Lunas'],
            
        ];

        $detailHutang = [
            ['pencatatan' =>'12-03-2025','utang' =>'100.000','membayarkan' =>'-'],
            ['pencatatan' =>'13-03-2025','utang' =>'-','membayarkan' =>'10.000'],
            ['pencatatan' =>'14-03-2025','utang' =>'-','membayarkan' =>'10.000'],
    ];
    Carbon::setLocale('id');

        return view('pages.hutang', compact('hutangs','detailHutang'));
    }
}

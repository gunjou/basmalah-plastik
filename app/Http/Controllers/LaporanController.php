<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $data_penjualan = [
    [
        'no' => 1,
        'tanggal' => '2025-04-01',
        'nama_produk' => 'Sabun Mandi',
        'terjual_per_satuan' => 10,
        'terjual_per_pack' => 2,
        'harga_satuan' => 5000,
        'harga_pack' => 45000,
        'total_penjualan' => 140000,
        'sisa_hutang' => 0,
        'catatan' => 'Lunas'
    ],
    [
        'no' => 2,
        'tanggal' => '2025-04-02',
        'nama_produk' => 'Pasta Gigi',
        'terjual_per_satuan' => 5,
        'terjual_per_pack' => 1,
        'harga_satuan' => 8000,
        'harga_pack' => 75000,
        'total_penjualan' => 115000,
        'sisa_hutang' => 15000,
        'catatan' => 'Bayar sebagian'
    ],
    [
        'no' => 3,
        'tanggal' => '2025-04-03',
        'nama_produk' => 'Minyak Goreng',
        'terjual_per_satuan' => 3,
        'terjual_per_pack' => 5,
        'harga_satuan' => 20000,
        'harga_pack' => 90000,
        'total_penjualan' => 510000,
        'sisa_hutang' => 0,
        'catatan' => 'Lunas'
    ],
    [
        'no' => 4,
        'tanggal' => '2025-04-04',
        'nama_produk' => 'Beras 5kg',
        'terjual_per_satuan' => 0,
        'terjual_per_pack' => 3,
        'harga_satuan' => null,
        'harga_pack' => 60000,
        'total_penjualan' => 180000,
        'sisa_hutang' => 80000,
        'catatan' => 'Belum lunas'
    ],
    [
        'no' => 5,
        'tanggal' => '2025-04-05',
        'nama_produk' => 'Mi Instan',
        'terjual_per_satuan' => 12,
        'terjual_per_pack' => 2,
        'harga_satuan' => 2500,
        'harga_pack' => 25000,
        'total_penjualan' => 75000,
        'sisa_hutang' => 0,
        'catatan' => 'Diskon 5,000 diterapkan'
    ],
    [
        'no' => 6,
        'tanggal' => '2025-04-06',
        'nama_produk' => 'Air Mineral 600ml',
        'terjual_per_satuan' => 20,
        'terjual_per_pack' => 0,
        'harga_satuan' => 3000,
        'harga_pack' => null,
        'total_penjualan' => 60000,
        'sisa_hutang' => 0,
        'catatan' => 'Lunas'
    ],
    [
        'no' => 7,
        'tanggal' => '2025-04-07',
        'nama_produk' => 'Teh Celup',
        'terjual_per_satuan' => 0,
        'terjual_per_pack' => 4,
        'harga_satuan' => null,
        'harga_pack' => 18000,
        'total_penjualan' => 72000,
        'sisa_hutang' => 20000,
        'catatan' => 'Akan dibayar minggu ini'
    ]
];

        return view('pages.laporan', compact('data_penjualan'));
    }
}
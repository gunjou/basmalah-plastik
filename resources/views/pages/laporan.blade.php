@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-1">Laporan Penjualan</h1>
    <p class="text-sm text-gray-500 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, dicta.
    </p>
    <div class="rounded-[20px] mb-4 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pl-4 pt-4">
        <!-- Total Penjualan -->
         
        <div class="md:col-span-2 flex flex-col justify-center">
        
            <h2 class="text-2xl font-semibold text-gray-800">Rp 1.600.000.000</h2>
            <p class="text-gray-500">Total Penjualan</p>
        </div>

        <!-- Keterangan Kanan -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Rp 4.600.000</h3>
                <p class="text-gray-500 text-sm">Laba Kotor</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Rp.3.000.000</h3>
                <p class="text-gray-500 text-sm">Total Hutang</p>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-800">1.985</h3>
                <p class="text-gray-500 text-sm">Produk Terjual</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-800">678</h3>
                <p class="text-gray-500 text-sm">Transaksi</p>
            </div>
        </div>
    </div>
    </div>
   
    
    <div class="rounded-[20px] mb-4 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div class="flex flex-col md:flex-row gap-4 mt-4 mb-4 px-4">
        <!-- Tanggal Mulai -->
        <div class="w-full md:w-1/2 mt-4">
            <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Mulai</label>
            <input name="start_date" type="date" id="start_date" aia-placeholder="Select date"
                class="datepicker bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>

        <!-- Tanggal Selesai -->
        <div class="w-full md:w-1/2 mt-4">
            <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Selesai</label>
            <input name="end_date" type="date" id="end_date"
                class="datepicker bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
    </div>
    <div class="flex justify-between items-center pt-2 px-4 pb-2 text-sm font-semibold">
    <div>
        Tabel Rekapan Penjualan
    </div>
    <div>
        <input type="text" placeholder="Search"
            class="border border-gray-300 rounded-[20px] px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>
    
</div>

<div class="bg-white shadow rounded-lg p-4 mx-4 overflow-y-auto max-h-90">
    <table class="table-auto w-full text-sm divide-y divide-gray-200 ">
    <thead class="bg-[#DFDFDF] text-black">
                <tr>
                <th class="px-2 py-1 text-center text-xs font-medium uppercase rounded-l-lg">No</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Tanggal</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Nama Produk</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Terjual perSatuan</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Terjual perPack</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Harga Satuan</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Harga Pack</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Total Penjualan</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Sisa Hutang</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase rounded-r-lg">Catatan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($data_penjualan as $penjualan)
                    <tr>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $penjualan['no'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $penjualan['tanggal'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $penjualan['nama_produk'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['terjual_per_satuan'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['terjual_per_pack'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['harga_satuan'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['harga_pack'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['total_penjualan'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['sisa_hutang'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $penjualan['catatan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    
    <div class="pt-2 pl-4 pb-2 text-sm font-semibold">
      <button
      class="flex items-center text-[10px] text-white px-2 py-2 rounded-[15px] bg-[#1E686D] hover:bg-[#72BDAF]">
      Unduh PDF</button>
   
        </div>
  

  </div>
</div>

</div>

</div>
@endsection

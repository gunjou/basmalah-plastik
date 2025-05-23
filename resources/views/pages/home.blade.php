@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-1">Transaksi Penjualan</h1>
    <p class="text-sm text-gray-500 mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, optio.</p>
    <div class="rounded-[20px] mb-4 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div class="flex justify-between items-center pt-2 px-4 pb-2 text-sm font-semibold">
    <p>{{ now()->translatedFormat('l, d F Y') }}</p>
    <div>
        <input type="text" placeholder="Search"
            class="border border-gray-300 rounded-[20px] px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>
</div>
   
<div class="bg-white shadow rounded-lg p-4 mx-4 overflow-y-auto max-h-50">
    <table class="table-auto w-full text-sm divide-y divide-gray-200 ">
    <thead class="bg-[#DFDFDF] text-black">
                <tr>
                <th class="px-2 py-1 text-center text-xs font-medium uppercase rounded-l-lg">No</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Nama Barang</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Jumlah Stock</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Satuan</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Harga</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase rounded-r-lg">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($stocks as $stock)
                    <tr>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $stock['no'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $stock['nama_barang'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $stock['jumlah_stock'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $stock['satuan'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">Rp. {{ $stock['harga'] }}</td>
                        <td class="px-2 py-1 text-center"><button class="bg-[#1E686D] hover:bg-[#72BDAF] text-white text-xs font-semibold py-0.5 px-1 rounded">
                            Pilih</button>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div  class="pt-2 pl-4 pb-2 text-sm font-semibold">
        Pembelian
    </div>
    <div class="bg-white shadow rounded-lg p-4 mx-4 overflow-y-auto max-h-40">
    <table class="min-w-[600px] w-full divide-y divide-gray-200">
               <tbody class=" bg-gray-200">
                @foreach ($pembelian as $beli)
                    <tr>
                        <td class="px-2 py-1 text-xs text-gray-800 ">{{ $beli['jumlah_barang'] }}</td>
                        <td class="px-2 py-1 text-xs text-gray-800">{{ $beli['nama_barang'] }}</td>
                        <td class="px-2 py-1 text-xs text-gray-600 ">Rp. {{ $beli['harga'] }}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
     
    </div>
   
  <div class="flex justify-end mt-4">
  <!-- Wrapper untuk 2 kolom -->
  <div class="flex flex-col md:flex-row gap-8 justify-between mt-4">
    <!-- Kolom Kiri: Sub Total, Diskon, Total -->
    <div class="space-y-4 w-full md:w-1/2 pr-4">
        <div class="flex justify-between">
            <label class="text-sm text-gray-700 pr-2">Sub Total</label>
            <input type="text" value="Rp. 80.000" class="text-sm text-end border rounded px-2 w-40" readonly />
        </div>

        <div class="flex justify-between">
            <label class="text-sm text-gray-700 pr-2">Diskon</label>
            <input type="text" value="10 %" class="text-sm text-end border rounded px-2 w-40" />
        </div>

        <div class="flex justify-between">
            <label class="text-sm text-gray-700 font-semibold pr-2">Total</label>
            <input type="text" value="Rp. 72.000" class="text-sm text-end border rounded px-2 w-40 font-semibold" readonly />
        </div>
    </div>

    <!-- Kolom Kanan: Bayar, Kembalian, Tombol -->
    <div class="space-y-4 w-full md:w-1/2 pr-4">
        <div class="flex justify-between">
            <label class="text-sm text-gray-700 pr-2">Bayar</label>
            <input type="text" value="Rp. 100.000" class="text-sm text-end border rounded px-2 w-40" />
        </div>

        <div class="flex justify-between">
            <label class="text-sm text-gray-700 pr-2">Kembalian</label>
            <input type="text" value="Rp. 28.000" class="text-sm text-end text-red-700 border rounded px-2 w-40" readonly />
        </div>

        <div class="text-center pt-4 pb-4">
            <button class="bg-black text-sm text-white px-4 py-2 rounded-lg w-full md:w-auto transition duration-300 ease-in-out transform hover:bg-gray-800 hover:scale-105 hover:shadow-lg">
                Cetak Struk
            </button>
        </div>
    </div>
</div>

  </div>
</div>

</div>

</div>
@endsection

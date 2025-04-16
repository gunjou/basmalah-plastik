@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Transaksi Penjualan</h1>
    <div class="rounded-[20px] mt-2 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div class="flex justify-between items-center pt-4 px-4 pb-2 text-sm font-semibold">
    <div>
        12 Januari 2025
    </div>
    <div>
        <input type="text" placeholder="Search"
            class="border border-gray-300 rounded-[20px] px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>
</div>
   
    <div class="bg-white shadow rounded-lg p-4 mx-4 overflow-x-auto">
    <table class="min-w-[600px] w-full divide-y divide-gray-200">
    <thead class="bg-gray-600 text-white">
                <tr>
                <th class="px-4 py-2 text-left text-xs font-medium uppercase rounded-l-lg">No</th>
                    <th class="px-4 py-2 text-left text-xs font-medium uppercase">Nama Barang</th>
                    <th class="px-4 py-2 text-left text-xs font-medium uppercase">Jumlah Stock</th>
                    <th class="px-4 py-2 text-left text-xs font-medium uppercase">Satuan</th>
                    <th class="px-4 py-2 text-left text-xs font-medium uppercase">Harga</th>
                    <th class="px-4 py-2 text-left text-xs font-medium uppercase rounded-r-lg">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($stocks as $stock)
                    <tr>
                        <td class="px-4 py-2 text-gray-800">{{ $stock['no'] }}</td>
                        <td class="px-4 py-2 text-gray-800">{{ $stock['nama_barang'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $stock['jumlah_stock'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $stock['satuan'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $stock['harga'] }}</td>
                        <td class="px-4 py-2"><button class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold py-1 px-3 rounded mr-2">
                            Pilih</button>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div  class="pt-2 pl-4 pb-2 text-sm font-semibold">
        Pembelian
    </div>
    <div class="bg-white shadow rounded-lg p-4 mx-4 overflow-x-auto">
    <table class="min-w-[600px] w-full divide-y divide-gray-200">
               <tbody class=" bg-gray-200">
                @foreach ($pembelian as $beli)
                    <tr>
                        <td class="px-4 py-2 text-gray-800 ">{{ $beli['no'] }}</td>
                        <td class="px-4 py-2 text-gray-800">{{ $beli['nama_barang'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $beli['jumlah_stock'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $beli['satuan'] }}</td>
                        <td class="px-4 py-2 text-gray-600 ">{{ $beli['harga'] }}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
     
    </div>
   
  <div class="flex justify-end mt-4">
  <!-- Wrapper untuk 2 kolom -->
  <div class="flex gap-16">
    <!-- Kolom Kiri: Sub Total, Diskon, Total, Kembalian, Tombol -->
    <div class="space-y-2">
      <div class="flex justify-between w-72">
        <label class="text-gray-700">Sub Total</label>
        <input type="text" value="Rp. 80.000" class="text-end border rounded px-2 w-40" readonly />
      </div>

      <div class="flex justify-between w-72">
        <label class="text-gray-700">Diskon</label>
        <input type="text" value="10 %" class="text-end border rounded px-2 w-40" readonly />
      </div>

      <div class="flex justify-between w-72">
        <label class="text-gray-700 font-semibold">Total</label>
        <input type="text" value="Rp. 72.000" class="text-end border rounded px-2 w-40 font-semibold" readonly />
      </div>
    </div>

    <!-- Kolom Kanan: Bayar -->
    <div class="space-y-2 mr-4">
      <div class="flex justify-between w-72">
        <label class="text-gray-700">Bayar</label>
        <input type="text" value="Rp. 100.000" class="text-end border rounded px-2 w-40" />
      </div>
      <div class="flex justify-between w-72">
        <label class="text-gray-700">Kembalian</label>
        <input type="text" value="Rp. 28.000" class="text-end border rounded px-2 w-40" readonly />
      </div>
      <div class="text-center mt-4 mb-4">
        <button class="bg-black text-white px-4 py-2 rounded-lg">Cetak Struck</button>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

</div>

</div>
@endsection

@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Stock Barang</h1>
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
   
    <div class="bg-white shadow rounded-lg p-4 mx-4 overflow-y-auto max-h-50">
    <table class="table-auto w-full text-sm divide-y divide-gray-200">
    <thead class="bg-gray-600 text-white">
                <tr>
                <th class="px-2 py-1 text-left text-xs font-medium uppercase rounded-l-lg">No</th>
                    <th class="px-2 py-1 text-left text-xs font-medium uppercase">Nama Barang</th>
                    <th class="px-2 py-1 text-left text-xs font-medium uppercase">Jumlah Stock</th>
                    <th class="px-2 py-1 text-left text-xs font-medium uppercase">Satuan</th>
                    <th class="px-2 py-1 text-left text-xs font-medium uppercase">Harga</th>
                    <th class="px-2 py-1 text-left text-xs font-medium uppercase rounded-r-lg">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($stocks as $stock)
                    <tr>
                        <td class="px-2 py-1 text-gray-800">{{ $stock['no'] }}</td>
                        <td class="px-2 py-1 text-gray-800">{{ $stock['nama_barang'] }}</td>
                        <td class="px-2 py-1 text-gray-600">{{ $stock['jumlah_stock'] }}</td>
                        <td class="px-2 py-1 text-gray-600">{{ $stock['satuan'] }}</td>
                        <td class="px-2 py-1 text-gray-600">{{ $stock['harga'] }}</td>
                        <td class="px-2 py-1"><button class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold py-1 px-3 rounded mr-2">
                            Pilih</button>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div  class="pt-2 pl-4 pb-2 text-sm font-semibold">
        12 Januari 2025
    </div>
</div>
@endsection

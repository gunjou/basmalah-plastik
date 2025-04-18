@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-2">Stock</h1>
    <div class="rounded-[20px] mb-4 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div class="flex justify-between items-center pt-2 px-4 pb-2 text-sm font-semibold">
    <div>
        12 Januari 2025
    </div>
    <div>
        <input type="text" placeholder="Search"
            class="border border-gray-300 rounded-[20px] px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>
</div>
   
<div class="bg-white shadow rounded-lg p-4 mx-4 overflow-y-auto max-h-90">
    <table class="table-auto w-full text-sm divide-y divide-gray-200">
    <thead class="bg-gray-600 text-white">
                <tr>
                <th class="px-2 py-1 text-center text-xs font-medium uppercase rounded-l-lg">No</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Nama Barang</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Jumlah Stock</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Satuan</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Harga</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">No Batch</th>
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
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $stock['harga'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $stock['no_batch'] }}</td>
                        <td class="px-2 py-1 text-center space-x-2"><button class="bg-green-500 hover:bg-green-600 text-white text-xs font-semibold py-1 px-2 rounded">
                        <i class="fa-solid fa-pen-to-square"></i></button><button class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold py-1 px-2 rounded">
                        <i class="fa-solid fa-trash"></i></button>
                        </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div class="pt-2 pl-4 pb-2 text-sm font-semibold">
        <button class="flex items-center bg-blue-500 text-[10px] text-white px-2 py-2 rounded-[15px] hover:bg-blue-600">Tambah Stock Baru</button>
    </div>
</div>

</div>
@endsection

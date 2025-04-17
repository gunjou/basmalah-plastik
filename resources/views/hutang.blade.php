@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Daftar Hutang</h1>
    <div class="rounded-[20px] mt-2 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div  class="pt-2 pl-4 pb-2 text-sm font-semibold">
        12 Januari 2025
    </div>
   
    <div class="bg-white shadow rounded-lg p-4 mx-4 w-full h-full ">
        <table class="min-w-full divide-y divide-gray-200 ">
            <thead>
                <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nama Barang</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Jumlah Stock</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Satuan</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($hutangs as $hutang)
                    <tr>
                        <td class="px-4 py-2 text-gray-800">{{ $hutang['no'] }}</td>
                        <td class="px-4 py-2 text-gray-800">{{ $hutang['nama_barang'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $hutang['jumlah_stock'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $hutang['satuan'] }}</td>
                        <td class="px-4 py-2 text-gray-600">{{ $hutang['harga'] }}</td>
                        <td class="px-4 py-2 text-gray-600">Aksi</td>
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

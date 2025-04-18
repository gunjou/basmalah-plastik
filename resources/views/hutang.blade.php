@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-2">Daftar Hutang</h1>
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
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Nama Pelanggan</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Jumlah Hutang</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase">Status</th>
                    <th class="px-2 py-1 text-center text-xs font-medium uppercase rounded-r-lg">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($hutangs as $hutang)
                    <tr>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $hutang['no'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-800">{{ $hutang['nama_pelanggan'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $hutang['jumlah_hutang'] }}</td>
                        <td class="px-2 py-1 text-center text-xs text-gray-600">{{ $hutang['status'] }}</td>
                        <td class="px-2 py-1 text-center space-x-2"><button class="bg-green-500 hover:bg-green-600 text-white text-xs font-semibold py-1 px-2 rounded">
                        Tambah</button><button class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold py-1 px-2 rounded">
                            Lunasi</button>
                        </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div class="pt-2 pl-4 pb-2 text-sm font-semibold">
        <button class="flex items-center bg-blue-500 text-[10px] text-white px-2 py-2 rounded-[15px] hover:bg-blue-600">Catat Hutang Baru</button>
    </div>
</div>

</div>
@endsection

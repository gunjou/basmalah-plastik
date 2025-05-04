@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-700 mb-1">Stock</h1>
    <p class="text-sm text-gray-500 mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, optio.</p>
    <div class="rounded-[20px] mb-4 mr-2 ml-2 px-2 shadow-md bg-white w-full h-full">
    <div class="flex justify-between items-center pt-2 px-4 pb-2 text-sm font-semibold">
    <p>{{ now()->translatedFormat('l, d F Y') }}</p>
    <div>
        <input type="text" placeholder="Search"
            class="border border-gray-300 rounded-[20px] px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>
</div>
   
<div class="bg-white shadow rounded-lg p-4 mx-4 overflow-y-auto max-h-90">
    <table class="table-auto w-full text-sm divide-y divide-gray-200">
    <thead class="bg-[#DFDFDF] text-black">
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
                        <td class="px-2 py-1 text-center space-x-2">
                        <div x-data="{ open: false }">
                        <button @click="open = true" class="bg-green-500 hover:bg-green-600 text-white text-xs font-semibold py-0.5 px-1 rounded">
                        <i class="fa-solid fa-pen-to-square"></i> Edit</button>    
                     <!-- Modal -->
    <div x-show="open" class="fixed inset-0 backdrop-blur-sm flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-[20px] shadow-lg w-full max-w-md relative">
            <!-- Icon silang untuk menutup modal -->
            <button @click="open = false" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <h2 class="text-xl font-semibold mb-4">Edit Stock</h2>
            <form>
                <input type="text" placeholder="Nama Barang" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="Jumlah Stock" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="Satuan" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="Harga" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="No Batch" class="w-full border p-2 rounded mb-2">
                <div class="flex justify-between items-center mt-4">
                    <div class="space-x-2">
                        <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded-[20px]">
                            Simpan
                        </button>
                        <button type="button" @click="open = false" class="bg-gray-500 text-white px-3 py-1 rounded-[20px]">
                            Batal
                        </button>
                    </div>
                    <button type="button" class="bg-red-600 text-white px-3 py-1 rounded-[20px]">
                        <i class="fa-solid fa-trash mr-1"></i> Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
                    </div>  
                        
                        
                        </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div class="pt-2 pl-4 pb-2 text-sm font-semibold">
    <div x-data="{ open: false }">
    <!-- Tombol trigger -->
    <button @click="open = true" class="flex items-center bg-[#1E686D] hover:bg-[#72BDAF] text-[10px] text-white px-2 py-2 rounded-[15px]">
        Tambah Stock Baru
    </button>

    <!-- Modal -->
    <div x-show="open" class="fixed inset-0 backdrop-blur-sm flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-xl font-semibold mb-4">Tambah Stock Baru</h2>
            <form>
                <input type="text" placeholder="Nama Barang" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="Jumlah" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="Satuan" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="Harga" class="w-full border p-2 rounded mb-2">
                <input type="number" placeholder="No Batch" class="w-full border p-2 rounded mb-2">
                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                <div class="flex justify-end mt-4">
                    <button type="button" @click="open = false" class="bg-gray-500 text-white px-3 py-1 rounded-[20px] mr-2">Batal</button>
                    <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded-[20px]">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
</div>

</div>
@endsection

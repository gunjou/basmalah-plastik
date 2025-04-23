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
    <thead class="bg-[#DFDFDF] text-black">
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
                        <td class="px-2 py-1 text-center space-x-2">
                        <div x-data="{ open: false }">
                        <button @click="open = true" class="bg-green-500 hover:bg-green-600 text-white text-xs font-semibold py-0.5 px-1 rounded">
                        Pilih</button>
                                       <!-- Modal -->
    <div x-show="open" class="fixed inset-0 backdrop-blur-sm flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-[20px] shadow-lg w-full max-w-[800px]">
            <div class="py-2 mb-2 px-2 shadow-md bg-blue-500 w-full h-full">
            <div class="flex justify-between ml-2">
                <h2 class="text-white text-lg font-bold">Gibran</h2>
            <button type="button" class="bg-blue-700 text-xs text-white px-3 py-1 rounded-[20px]">
                    <i class="fa-solid fa-pen-to-square mr-1 text-xs"></i> Ubah Nama Pelanggan
                </button>
            </div>
            <div class="bg-white rounded-lg justify-between mt-2">
                <div class="flex justify-between ml-2 text-xs">
                    <div>
                    <h3>Total utang Pelanggan : </h3>
                    <p class="text-red-500 font-semibold">Rp.5.000.000</p>    
                    </div>
                    <button type="button" class="bg-yellow-500 mr-2 text-xs text-black mt-2 mb-2 px-3 py-1 rounded-[20px]">
                    <i class="fa-solid fa-pen-to-square mr-1 text-xs"></i> Lunasi Utang
                </button>    
            </div>
               
            </div >
            
            </div>
            <div class="flex justify-between ml-2">
            <table class="table-auto w-full text-sm divide-y divide-gray-200 ">
            </table>
            </div>
            
            <div class="overflow-y-auto max-h-80">
  <table class="min-w-full bg-white border border-gray-300 rounded shadow ">
    <thead class="bg-gray-200">
      <tr>
        <th class="py-2 px-4 border-b text-center">Pencatatan</th>
        <th class="py-2 px-4 border-b text-center">Hutang</th>
        <th class="py-2 px-4 border-b text-center">Membayarkan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">2025-04-23</td>
        <td class="py-2 px-4 border-b">Rp.1.000.000</td>
        <td class="py-2 px-4 border-b">Rp.0</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="flex justify-between items-center mt-4">
                <div class="space-x-2">
                    <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded-[20px]"><i class="fa-solid fa-plus"></i> Tambah Hutang</button>
                    <button type="button" @click="open = false" class="bg-gray-500 text-white px-3 py-1 rounded-[20px]"> Bayar Hutang</button>
                </div>
                
            </div> 
        </div>
    </div>
                        </div>    
                        
                        </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
    <div class="pt-2 pl-4 pb-2 text-sm font-semibold">
        <button class="flex items-center text-[10px] text-white px-2 py-2 rounded-[15px] bg-[#1E686D] hover:bg-[#72BDAF]">Catat Hutang Baru</button>
    </div>
</div>
</div>
@endsection

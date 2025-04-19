<div class="w-64 h-screen bg-[#1E686D] text-white fixed z-50">
    <div class="flex p-4 font-bold justify-center text-xl border-b border-gray-500">BASMALAH PLASTIK</div>
    <nav class="mt-4">
    <a href="{{ route('home') }}"class="flex items-center justify-center rounded-[20px] mx-4 font-semibold block py-2.5 px-4 mb-2 hover:bg-[#D8D8D8]
    {{ request()->routeIs('home') ? 'bg-[#72BDAF] text-black' : 'bg-white text-black' }}">Kasir</a> 
    <a href="{{ route('stock') }}"class="flex items-center justify-center rounded-[20px] mx-4 font-semibold block py-2.5 px-4 mb-2 hover:bg-[#D8D8D8]
    {{ request()->routeIs('stock') ? 'bg-[#72BDAF] text-black' : 'bg-white text-black' }}">Stock</a>        
    <a href="{{ route('hutang') }}"class="flex items-center justify-center rounded-[20px] mx-4 font-semibold block py-2.5 px-4 mb-2 hover:bg-[#D8D8D8]
    {{ request()->routeIs('hutang') ? 'bg-[#72BDAF] text-black' : 'bg-white text-black' }}">Hutang</a>  
    <a href="{{ route('laporan') }}"class="flex items-center justify-center rounded-[20px] mx-4 font-semibold block py-2.5 px-4 mb-2 hover:bg-[#D8D8D8]
    {{ request()->routeIs('laporan') ? 'bg-[#72BDAF] text-black' : 'bg-white text-black' }}">Laporan</a>  
    </nav>
</div>

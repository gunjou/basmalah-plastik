<div class="w-64 h-screen bg-green-800 text-white fixed">
    <div class="flex p-4 font-bold justify-center text-xl border-b border-gray-700">BASMALAH PLASTIK</div>
    <nav class="mt-4">
        <a href="{{ route('home') }}" class=" flex items-center justify-center rounded-[20px] mx-4 bg-white text-black font-semibold block py-2.5 px-4 mb-2 hover:bg-gray-400 {{ request()->routeIs('home') ? 'bg-gray-700' : '' }}">Kasir</a>
        <a href="{{ route('stock') }}" class=" flex items-center justify-center rounded-[20px] mx-4 bg-white text-black font-semibold block py-2.5 px-4 mb-2 hover:bg-gray-400 {{ request()->routeIs('stock') ? 'bg-gray-700' : '' }}">Stock</a>
        <a href="{{ route('hutang') }}" class=" flex items-center justify-center rounded-[20px] mx-4 bg-white text-black font-semibold block py-2.5 px-4 mb-2 hover:bg-gray-400 {{ request()->routeIs('hutang') ? 'bg-gray-700' : '' }}">Hutang</a>
        <a href="#" class=" flex items-center justify-center rounded-[20px] mx-4 bg-white text-black font-semibold block py-2.5 px-4 mb-2 hover:bg-gray-400">Laporan</a>
    </nav>
</div>

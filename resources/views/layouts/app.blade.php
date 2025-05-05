<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Basmalah Plastik' }}</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</head>
<body class="bg-gray-100">



    @include('components.sidebar')
    @include('components.navbar')
    

    <div class="ml-64 pt-17 px-6">
        @yield('content')
        
    </div>
    <div id="loader" class="fixed inset-0 bg-white bg-opacity-80 hidden items-center justify-center">
  <div class=" ml-64 w-12 h-12 border-4 border-green-500 border-t-transparent rounded-full animate-spin"></div>
</div>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('loader');

    // Tampilkan loader saat klik link
    document.querySelectorAll('a[href]').forEach(link => {
      link.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href && href !== '#' && !this.hasAttribute('data-no-loader')) {
          loader.classList.remove('hidden');
          loader.classList.add('flex');
        }
      });
    });

    // Tampilkan loader saat submit form
    document.querySelectorAll('form').forEach(form => {
      form.addEventListener('submit', function () {
        loader.classList.remove('hidden');
        loader.classList.add('flex');
      });
    });
  });
</script>

</body>
</html>

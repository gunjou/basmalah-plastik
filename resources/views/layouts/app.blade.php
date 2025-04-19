<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Basmalah Plastik' }}</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
</head>
<body class="bg-gray-100">

    @include('components.sidebar')
    @include('components.navbar')

    <div class="ml-64 pt-17 px-6">
        @yield('content')
    </div>

</body>
</html>

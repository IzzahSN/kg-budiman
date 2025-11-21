<!DOCTYPE html>
<html lang="en" class="w-full min-h-dvh overflow-x-hidden" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/logo-kg-budiman.png">
    <title>Kampung Budiman</title>
    <script defer src="https://unpkg.com/tailwindcss-intersect@2.x.x/dist/observer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-poppins min-h-dvh m-0 overflow-x-hidden w-full">
    <div class="flex flex-col min-h-dvh w-full">
        {{-- Navbar --}}
        @include('components.navbar-guest')
        
        {{-- Main Content --}}
        <main class="flex-1 w-full">
            {{ $slot }}
        </main>

        {{-- Footer --}}
        @include('components.footer')
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laundry App</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .image-container {
            position: relative;
            width: 100%;
            max-width: 200px;
            /* Adjust this value as needed */
        }

        .overlay-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
    </style>
</head>

<body class="w-screen font-sans text-gray-900 antialiased">
    <div class="h-fit w-fit flex flex-col sm:justify-center items-center pt-15 sm:pt-0 bg-sky-300">
        <div class="image-container">
            <img src="/image/ImageSign1.png" alt="Background Image" class="w-full" />
            <img src="/image/character.png" alt="Overlay Image" class="overlay-image" />
        </div>

        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
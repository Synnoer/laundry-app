<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        h1 {
            font-size: 1.5rem;
            /* Base font size */
            margin-left: 3rem;
            /* Base margin */
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 1rem;
                /* Adjust font size for smaller screens */
                margin-left: 1.5rem;
                /* Adjust margin for smaller screens */
            }
        }

        main {
            min-height: calc(100vh - 3.5rem);
            /* Adjust for header height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center align items vertically */
            align-items: center;
            /* Center align items horizontally */
        }

        .next-button {
            width: 90%;
            /* Set button width to 90% of the viewport width */
            max-width: 20rem;
            /* Limit button width to 20rem */
        }

        .product-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
            /* Add space between product containers */
            padding: 1rem;
            background-color: #f0f0f0;
            /* Light gray background */
            border-radius: 0.5rem;
            /* Rounded corners */
            width: 80%;
            /* Adjust width as needed */
        }

        .product-image {
            width: 100px;
            /* Adjust image width as needed */
            height: auto;
            /* Maintain aspect ratio */
        }

        .product-details {
            flex-grow: 1;
            /* Allow description to take remaining space */
            margin-left: 1rem;
            /* Add space between image and details */
        }

        .price-details {
            margin-top: 1rem;
            /* Add space between product container and price details */
            text-align: right;
            /* Align price details to the right */
        }

        .price {
            font-weight: bold;
        }

        .quantity-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            /* Push buttons to the right */
        }

        .quantity-button {
            cursor: pointer;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            background-color: skyblue;
            border-radius: 0.25rem;
            margin: 0 0.25rem;
            /* Add space between buttons */
        }
        .header-bg {
        background-image: url('/Image/BG-Home.png');
        background-size: cover;
        background-position: center;
        }

        
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-200">

        <!-- Page Heading -->
        @if (isset($header))
        <header class="header-bg shadow">
            <div class="w-full mx-auto ">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="bg-white">
            {{ $slot }}
        </main>


        <footer>
            <div class="w-full">
                @include('layouts.navigation')
            </div>
        </footer>
    </div>
</body>

</html>
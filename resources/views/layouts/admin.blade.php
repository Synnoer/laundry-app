<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @laravelPWA
        <style>
            main {
                min-height: calc(100vh - 3.5rem); /* Adjust for header height */
                display: flex;
                flex-direction: column;
                justify-content: center; /* Center align items vertically */
                align-items: center; /* Center align items horizontally */
            }

            .primary-button {
                width: 90%; /* Set button width to 90% of the viewport width */
                max-width: 20rem; /* Limit button width to 20rem */
            }
        </style>
    </head>
    <body class="bg-gray-100">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-blue-950 text-white h-screen">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="/image/logo-white.png" alt="Logo" class="w-13 h-12 mr-4 items-center">
                        <div class="p-4">
                            <h2 class="text-2xl font-bold">Admin Dashboard</h2>
                        </div>
                    </div>
                </div>
                <ul>
                    <li class="px-4 py-2"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="px-4 py-2"><a href="{{ route('admin.userlist') }}">User List</a></li>
                    <li class="px-4 py-2"><a href="{{ route('admin.orderlist') }}">Order List</a></li>
                    <li class="px-4 py-2"><a href="{{ route('admin.editdatabase') }}">Edit Database</a></li>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </div>
            <!-- Main Content -->
            <div class="flex-1 p-6">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

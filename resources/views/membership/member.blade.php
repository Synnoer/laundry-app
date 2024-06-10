<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Get Membership
            </button>
        </div>
    </x-slot>
<main class="flex flex-col justify-between h-full">
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-gray-300 dark:bg-gray-400 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold mb-4">Get Membership Now</h2>
                    <p class="mb-4">Get membership now and enjoy many benefits</p>
                </div>
            </div>
        </div>
    

    <div class="flex justify-center items-center h-full mt-8">
        <div class="flex flex-col justify-center items-center space-y-10">
            <!-- Silver Membership Button -->
            <button onclick="window.location='{{ route('membership.silver') }}'" class="px-10 py-2 bg-gradient-to-r from-zinc-50 to-zinc-400 text-black rounded-md focus:outline-none">
                <p class="font-semibold">Silver</p>
                <p>Rp. 30.000/Month</p>
            </button>
            
            <!-- Gold Membership Button -->
            <button onclick="window.location='{{ route('membership.gold') }}'" class="px-10 py-2 bg-gradient-to-r from-amber-200 to-amber-400 text-black rounded-md focus:outline-none">
                <p class="font-semibold">Gold</p>
                <p>Rp. 100.000/Month</p>
            </button>
            
            <!-- Platinum Membership Button -->
            <button onclick="window.location='{{ route('membership.platinum') }}'" class="px-10 py-2 bg-gradient-to-r from-slate-400 to-slate-600 text-black rounded-md focus:outline-none">
                <p class="font-semibold">Platinum</p>
                <p>Rp. 150.000/Month</p>
            </button>
        </div>
    </div>
</div>
</main>
</x-app-layout>

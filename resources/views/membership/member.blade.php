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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-gray-300 dark:bg-gray-400 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="font-size: 3rem">Get Membership Now</h1>
                    <p>Get membership now and enjoy many benefits</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center h-full">
        <div class="flex flex-col justify-center items-center space-y-10">
            <!-- Button 1 -->
            <button class="px-10 py-2 bg-zinc-400 text-white rounded-md focus:outline-none">Silver</button>
            
            <!-- Button 2 -->
            <button class="px-10 py-2 bg-amber-300 text-white rounded-md focus:outline-none">Gold</button>
            
            <!-- Button 3 -->
            <button class="px-10 py-2 bg-zinc-700 text-white rounded-md focus:outline-none">Platinum</button>
        </div>
    </div>
</x-app-layout>

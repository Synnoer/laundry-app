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
            <div class="p-4 sm:p-8 bg-zinc-700 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="font-size: 3rem">Platinum Membership</h1>
                    <p>Rp. 150.000/month</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p>1. Membership duration 8 weeks</p>
                <p>2. Total weight each session 3 Kg</p>
                <p>3. Total session 16</p>
                <p>4. Available Service: Dry cleaning + fold + ironing + choose fragrance</p>
            </div>
            <div class="text-center mb-12">  
                <a href="https://wa.me/+6282321568554?text=Im%20interested%20in%20buying%20the%20Platinum%20membership%20" 
                   class="inline-flex items-center px-6 py-2 bg-gray-800 text-white border border-transparent rounded-md font-semibold text-sm uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                    {{ __('Buy') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
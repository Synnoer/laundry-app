<x-app-layout>
    </style>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Ongoing Order
            </button>
        </div>
    </x-slot>

    <main">
        <!-- Product Containers -->
        <div class="product-container ">
            <img src="/image/shirt.png" alt="Shirt" class="product-image">
            <div class="product-details">
                <p class="description">Shirt Description</p>
                <p class="quantity">2 x 350gram</p>
                <p>Order date</p>
                <p>01 Apr 2024 15:25</p>
                <p>Estimated completion</p>
                <p>02 Apr 2024 15:20</p>
            </div>
        </div>

        <div class="flex items-center justify-center px-2 py-0.5 text-xl italic mb-2 text-bold">
            <h3>Order Status</h3>
        </div>
        <!-- Total Pieces -->
        <x-status-label>{{ __('Awaiting Pickup') }}</x-status-label>
        <x-status-label>{{ __('Order picked up') }}</x-status-label>
        <x-status-label>{{ __('Order arrives at the laudry') }}</x-status-label>
        <x-status-label>{{ __('Order is being washed') }}</x-status-label>
        <x-status-label>{{ __('Order finished washing') }}</x-status-label>
        <x-status-label>{{ __('Order delivered to destination') }}</x-status-label>
        <x-status-label>{{ __('Order arrives at destination') }}</x-status-label>


        <div class="flex justify-center">
            <button class=" px-2 py-1 bg-red-400 text-black-700 rounded-md shadow-md mt-7  ">
                <span class="text-white">{{ __('Cancel Order') }}</span>
            </button>
        </div>


        </main>
</x-app-layout>
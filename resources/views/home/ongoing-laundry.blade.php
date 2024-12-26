<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white bg-blue-500 hover:bg-blue-700 rounded-md shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Ongoing Order
            </button>
        </div>
    </x-slot>

    <main class="py-8 px-4 bg-gray-50">
        <!-- Product Container -->
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center space-x-6">
                <img src="/image/shirt.png" alt="Shirt" class="w-32 h-32 object-cover rounded-lg shadow-md">
                <div class="text-gray-700">
                    <h3 class="text-2xl font-semibold mb-2">Order Details</h3>
                    <p><strong>Total Weight:</strong> {{$order->total_weight}} gram</p>
                    <p><strong>Order Date:</strong> {{$order->order_date->format('Y-m-d') ?? 'N/A'}}</p>
                    <p><strong>Estimated Completion:</strong> {{$order->completion_estimation_date->format('Y-m-d') ?? 'N/A'}}</p>
                </div>
            </div>
        </div>

        <!-- Order Status -->
        <div class="mt-6 max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Order Status</h3>
            <div class="grid grid-cols-2 gap-4">
                <x-green-label :active="$order->status == 0">{{ __('Awaiting Pickup') }}</x-green-label>
                <x-green-label :active="$order->status == 1">{{ __('Order Picked Up') }}</x-green-label>
                <x-green-label :active="$order->status == 2">{{ __('Order Arrives at Laundry') }}</x-green-label>
                <x-green-label :active="$order->status == 3">{{ __('Order is Being Washed') }}</x-green-label>
                <x-green-label :active="$order->status == 4">{{ __('Order Finished Washing') }}</x-green-label>
                <x-green-label :active="$order->status == 5">{{ __('Order Delivered to Destination') }}</x-green-label>
                <x-green-label :active="$order->status == 6">{{ __('Order Arrives at Destination') }}</x-green-label>
            </div>
        </div>

        <!-- Cancel Order -->
        <div class="mt-6 max-w-4xl mx-auto text-center">
            @if($order->status == 0)
                <form action="{{ route('cancelOrder', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this order?');">
                    @csrf
                    @method('delete')
                    <button class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md shadow-md hover:bg-red-600">
                        {{ __('Cancel Order') }}
                    </button>
                </form>
            @else
                <button class="px-4 py-2 bg-gray-300 text-gray-600 font-semibold rounded-md shadow-md cursor-not-allowed">
                    {{ __('Cancel Order') }}
                </button>
            @endif
        </div>
    </main>
</x-app-layout>

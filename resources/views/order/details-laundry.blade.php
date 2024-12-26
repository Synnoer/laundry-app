<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Order Details
            </button>
        </div>
    </x-slot>

    <main class="p-6 max-w-4xl mx-auto" style="padding-bottom: 100px;">
        @foreach ($order['products'] as $product)
            <div class="product-container flex items-center mb-4 p-4 bg-gray-100 rounded-lg shadow-md">
                <img src="{{ asset('image/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-16 h-16 rounded-md object-cover">
                <div class="product-details ml-4">
                    <p class="text-lg font-semibold text-gray-900">{{ $product['name'] }}</p>
                    <p class="text-sm text-gray-600">{{ $product['quantity'] }} x {{ $product['weight'] }} gram</p>
                </div>
            </div>
        @endforeach

        <div class="total-pcs mb-4 p-4 bg-white rounded-lg shadow-md">
            <p class="text-gray-800 font-semibold">Total Weight: <span class="font-bold">{{ $order['total_weight'] }}</span> grams</p>
        </div>

        <div class="service-details mb-4 p-4 bg-white rounded-lg shadow-md">
            <p class="text-gray-800 font-semibold">Service: <span class="font-bold">{{ $order['service'] }}</span></p>
        </div>

        <div class="fragrance-details mb-4 p-4 bg-white rounded-lg shadow-md">
            <p class="text-gray-800 font-semibold">Fragrance: <span class="font-bold">{{ $order['fragrance'] }}</span></p>
        </div>

        <div class="order-dates mb-4 p-4 bg-white rounded-lg shadow-md">
            <p class="text-gray-800">Order Date: <span class="font-semibold">{{ $order['order_date'] }}</span></p>
            <p class="text-gray-800">Completion Estimation Date: <span class="font-semibold">{{ $order['completion_estimation_date'] }}</span></p>
        </div>

        <div class="next-button text-center mt-6">
            @if (Auth::user()->membership->session_left > 0)
                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    <input type="hidden" name="products" value="{{ json_encode($order['products']) }}">
                    <input type="hidden" name="total_weight" value="{{ $order['total_weight'] }}">
                    <input type="hidden" name="service" value="{{ $order['service'] }}">
                    <input type="hidden" name="fragrance" value="{{ $order['fragrance'] }}">
                    <input type="hidden" name="order_date" value="{{ $order['order_date'] }}">
                    <input type="hidden" name="completion_estimation_date" value="{{ $order['completion_estimation_date'] }}">
                    <input type="hidden" name="user_id" value="{{ $order['user_id'] }}">

                    <x-primary-button>{{ __('Checkout') }}</x-primary-button>
                </form>
            @endif
        </div>
    </main>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Order Details
            </button>
        </div>
    </x-slot>

    <main class="p-6">
        @foreach ($order['products'] as $product)
            <div class="product-container mb-4 p-4 bg-gray-100 rounded shadow">
                <img src="{{ asset('image/' . $product['image']) }}" alt="{{ $product['name'] }}" class="product-image">
                <div class="product-details ml-4">
                    <p class="description">{{ $product['name'] }}</p>
                    <p class="quantity">{{ $product['quantity'] }} x {{ $product['weight'] }} gram</p>
                </div>
            </div>
        @endforeach

        <div class="total-pcs mb-4">
            <p>Total Weight: {{ $order['total_weight'] }} grams</p>
        </div>

        <div class="service-details mb-4">
            <p>Service: {{ $order['service'] }}</p>
        </div>

        <div class="fragrance-details mb-4">
            <p>Fragrance: {{ $order['fragrance'] }}</p>
        </div>

        <div class="order-dates mb-4">
            <p>Order Date: {{ $order['order_date'] }}</p>
            <p>Completion Estimation Date: {{ $order['completion_estimation_date'] }}</p>
        </div>

        <!-- Checkout Button -->
        <div class="next-button text-center">
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

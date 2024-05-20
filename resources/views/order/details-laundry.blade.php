<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-white leading-tight">Order Details</h1>
    </x-slot>

    <main class="p-6">
        <div class="product-container mb-4 p-4 bg-gray-100 rounded shadow">
            <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
            <div class="product-details ml-4">
                <p class="description">{{ $order->product_description }}</p>
                <p class="quantity">{{ $order->quantity }} x 350gram</p>
            </div>
        </div>

        <div class="total-pcs mb-4">
            <p>Total Weight: {{ $order->total_weight }}Kg</p>
        </div>

        <div class="service-details mb-4">
            <p>Service: {{ $order->service }}</p>
        </div>

        <div class="fragrance-details mb-4">
            <p>Fragrance: {{ $order->fragrance }}</p>
        </div>

        <div class="price-details mb-4">
            <p>Total Price: Rp. {{ number_format($order->total_price, 2) }}</p>
            <p>Subtotal: Rp. {{ number_format($order->subtotal, 2) }}</p>
            <p>Discount: Rp. {{ number_format($order->discount, 2) }}</p>
        </div>

        <div class="order-dates mb-4">
            <p>Order Date: {{ $order->order_date }}</p>
            <p>Completion Estimation Date: {{ $order->completion_estimation_date }}</p>
        </div>

        <div class="next-button text-center">  <a class="inline-flex items-center px-6 py-2 bg-gray-800 dark:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-black focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
            {{ __('Checkout') }}</a>
        </div>
    </main>
</x-app-layout>

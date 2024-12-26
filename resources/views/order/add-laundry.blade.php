<x-app-layout>
    <x-slot name="header">
        <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white rounded-md shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Make an Order
        </button>
    </x-slot>

    <main class="flex flex-col justify-between h-full" style="padding-bottom: 100px;">
        <form method="GET" action="{{ route('order.checkout') }}" id="order-form" class="flex flex-col h-full">
            @csrf
            <input type="hidden" name="order_date" value="{{ request('order_date') }}">
            <input type="hidden" name="fragrance" value="{{ request('fragrance') }}">

            <!-- Products Section -->
            <div class="flex-1 overflow-y-auto my-4 p-4 bg-white rounded-lg shadow-lg max-w-3xl mx-auto">
                @foreach ($products as $product)
                <div class="product-container flex items-center justify-between border-b border-gray-300 py-4">
                    <!-- Product Image -->
                    <img src="{{ asset('image/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-12 h-12 rounded-md object-cover">

                    <!-- Product Details -->
                    <div class="product-details flex-1 ml-4 text-sm">
                        <p class="font-semibold text-black">{{ $product['name'] }}</p>
                        <p class="text-black">{{ $product['weight'] }} grams/pcs</p>
                    </div>

                    <!-- Quantity Buttons -->
                    <div class="quantity-buttons flex items-center space-x-2">
                        <button type="button" class="quantity-button bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 px-3 py-1 rounded-md text-gray-900 dark:text-gray-100 font-bold" onclick="updateQuantity({{ $product['id'] }}, -1)">-</button>
                        <span class="quantity font-semibold text-black" id="quantity-{{ $product['id'] }}">0</span>
                        <button type="button" class="quantity-button bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded-md text-white font-bold" onclick="updateQuantity({{ $product['id'] }}, 1)">+</button>
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="products[{{ $product['id'] }}][name]" value="{{ $product['name'] }}">
                    <input type="hidden" name="products[{{ $product['id'] }}][weight]" value="{{ $product['weight'] }}">
                    <input type="hidden" name="products[{{ $product['id'] }}][quantity]" id="input-quantity-{{ $product['id'] }}" value="0">
                    <input type="hidden" name="products[{{ $product['id'] }}][image]" value="{{ $product['image'] }}">
                </div>
                @endforeach
            </div>

            <!-- Total Weight and Warnings -->
            <div class="my-4 text-center">
                <p class="text-gray-700 dark:text-gray-300 font-semibold">Total Weight: <span id="total-weight">0</span> grams</p>
                <p id="weight-warning" class="text-red-500 hidden mt-2">The total weight exceeds 3kg. Additional charges will be applied.</p>
            </div>

            <!-- Next Button -->
            <div class="text-center mb-4">
                <button type="submit" class="inline-flex items-center px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md shadow-md uppercase tracking-wide transition ease-in-out duration-150" onclick="return validateWeight()">
                    {{ __('Next') }}
                </button>
            </div>
        </form>
    </main>

    <script>
        // Update product quantity
        function updateQuantity(productId, delta) {
            let quantityElement = document.getElementById('quantity-' + productId);
            let inputElement = document.getElementById('input-quantity-' + productId);
            let quantity = parseInt(quantityElement.textContent) + delta;

            // Prevent negative quantity
            if (quantity < 0) quantity = 0;

            // Update DOM and hidden input
            quantityElement.textContent = quantity;
            inputElement.value = quantity;

            // Update total weight
            updateTotalWeight();
        }

        // Calculate and update total weight
        function updateTotalWeight() {
            let totalWeight = 0;

            document.querySelectorAll('.product-container').forEach(container => {
                let weight = parseInt(container.querySelector('.weight').textContent.split(' ')[0]);
                let quantity = parseInt(container.querySelector('.quantity').textContent);

                totalWeight += weight * quantity;
            });

            // Update DOM
            document.getElementById('total-weight').textContent = totalWeight;

            // Show/Hide warning
            let weightWarning = document.getElementById('weight-warning');
            if (totalWeight > 3000) {
                weightWarning.classList.remove('hidden');
            } else {
                weightWarning.classList.add('hidden');
            }
        }

        // Validate weight on submission
        function validateWeight() {
            let totalWeight = parseInt(document.getElementById('total-weight').textContent);
            if (totalWeight > 3000) {
                alert('The total weight exceeds 3kg. Additional charges will be applied.');
            }
            return true;
        }

        // Initialize total weight
        document.addEventListener('DOMContentLoaded', updateTotalWeight);
    </script>
</x-app-layout>

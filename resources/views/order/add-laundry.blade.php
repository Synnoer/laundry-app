<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-white">Make an Order</h1>
    </x-slot>

    <main class="flex flex-col justify-between h-full">
        <form method="GET" action="{{ route('order.checkout') }}" id="order-form">
            @csrf
            <input type="hidden" name="order_date" value="{{ request('order_date') }}">
            <input type="hidden" name="fragrance" value="{{ request('fragrance') }}">


            <div class="my-8 flex flex-col justify-center items-center space-y-10">
                <div class="bg-white dark:bg-gray-300 rounded-lg shadow-md p-4">
                    @foreach ($products as $product)
                    <div class="product-container">
                        <img src="{{ asset('image/' . $product['image']) }}" alt="{{ $product['name'] }}" class="product-image">
                        <div class="product-details">
                            <p class="description">{{ $product['name'] }}</p>
                            <p class="weight">{{ $product['weight'] }} gram/pcs</p>
                        </div>
                        <div class="quantity-buttons">
                            <button type="button" class="quantity-button" onclick="updateQuantity({{ $product['id'] }}, -1)">-</button>
                            <span class="quantity" id="quantity-{{ $product['id'] }}">0</span>
                            <button type="button" class="quantity-button" onclick="updateQuantity({{ $product['id'] }}, 1)">+</button>
                        </div>
                        <input type="hidden" name="products[{{ $product['id'] }}][name]" value="{{ $product['name'] }}">
                        <input type="hidden" name="products[{{ $product['id'] }}][weight]" value="{{ $product['weight'] }}">
                        <input type="hidden" name="products[{{ $product['id'] }}][quantity]" id="input-quantity-{{ $product['id'] }}" value="0">
                        <input type="hidden" name="products[{{ $product['id'] }}][image]" value="{{ $product['image'] }}">
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="my-4">
                <p class="text-gray-700">Total Weight: <span id="total-weight">0</span> grams</p>
                <p id="weight-warning" class="text-red-500 hidden">The total weight of the order exceeds 3kg, additional charges will be applied.</p>
            </div>

            <div class="next-button text-center">
                <button type="submit" class="inline-flex items-center px-6 py-2 bg-gray-800 dark:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-black focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" onclick="return validateWeight()">
                    {{ __('Next') }}
                </button>
            </div>
        </form>
    </main>

    <script>
        function updateQuantity(productId, delta) {
            let quantityElement = document.getElementById('quantity-' + productId);
            let inputElement = document.getElementById('input-quantity-' + productId);
            let quantity = parseInt(quantityElement.textContent) + delta;
            if (quantity < 0) quantity = 0; // Prevent quantity from going below 0
            quantityElement.textContent = quantity;
            inputElement.value = quantity;
            updateTotalWeight();
        }

        function updateTotalWeight() {
            let totalWeight = 0;
            document.querySelectorAll('.product-container').forEach(container => {
                let weight = parseInt(container.querySelector('.weight').textContent);
                let quantity = parseInt(container.querySelector('.quantity').textContent);
                totalWeight += weight * quantity;
            });
            document.getElementById('total-weight').textContent = totalWeight;

            let weightWarning = document.getElementById('weight-warning');
            if (totalWeight > 3000) {
                weightWarning.classList.remove('hidden');
            } else {
                weightWarning.classList.add('hidden');
            }
        }

        function validateWeight() {
            let totalWeight = parseInt(document.getElementById('total-weight').textContent);
            if (totalWeight > 3000) {
                alert('The total weight of the order exceeds 3kg, additional charges will be applied.');
            }
            return true;
        }

        document.addEventListener('DOMContentLoaded', updateTotalWeight);
    </script>
</x-app-layout>
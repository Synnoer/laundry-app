<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-white">Make an Order</h1>
    </x-slot>

    <div class="my-8 flex flex-col justify-center items-center space-y-10">
        <div class="bg-white dark:bg-grey-300 rounded-lg shadow-md p-4">
            <div class="product-container">
                <img src="/image/shirt.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt</p>
                    <p class="weight">350gram/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/image/pants.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Pants</p>
                    <p class="weight">350gram/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/image/jacket.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Jacket</p>
                    <p class="weight">450gram/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/image/t-shirt.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">T-Shirt</p>
                    <p class="weight">350gram/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button ">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/image/underwear.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Underwear</p>
                    <p class="weight">250gram/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>

            </div>
        </div>
    </div>
    
    <div class="my-8">
        <p class="text-gray-700">Total Weight: </p>
    </div>

    <div class="next-button text-center">  <a href="{{ route('order.checkout') }}" class="inline-flex items-center px-6 py-2 bg-gray-800 dark:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-black focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
        {{ __('Next') }}</a>
    </div>
</x-app-layout>

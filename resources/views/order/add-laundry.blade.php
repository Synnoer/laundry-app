<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-white">Make an Order</h1>
    </x-slot>

    <div class="my-8 flex flex-col justify-center items-center space-y-10">
        <div class="bg-white dark:bg-grey-300 rounded-lg shadow-md p-4">
            <div class="product-container">
                <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt Description</p>
                    <p class="price">$10/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt Description</p>
                    <p class="price">$10/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt Description</p>
                    <p class="price">$10/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt Description</p>
                    <p class="price">$10/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt Description</p>
                    <p class="price">$10/pcs</p>
                </div>
                <div class="quantity-buttons">
                    <button class="quantity-button">-</button>
                    <span class="quantity">1</span>
                    <button class="quantity-button">+</button>
                </div>
            </div>
            <div class="product-container">
                <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
                <div class="product-details">
                    <p class="description">Shirt Description</p>
                    <p class="price">$10/pcs</p>
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

    <x-primary-button class="primary-button mt-auto">{{ __('Next') }}</x-primary-button>
</x-app-layout>

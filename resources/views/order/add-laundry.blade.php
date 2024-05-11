<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        h1 {
            font-size: 1.5rem; /* Base font size */
            margin-left: 3rem; /* Base margin */
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 1rem; /* Adjust font size for smaller screens */
                margin-left: 1.5rem; /* Adjust margin for smaller screens */
            }
        }

        main {
            min-height: calc(100vh - 3.5rem); /* Adjust for header height */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center align items vertically */
            align-items: center; /* Center align items horizontally */
        }

        .primary-button {
            width: 90%; /* Set button width to 90% of the viewport width */
            max-width: 20rem; /* Limit button width to 20rem */
        }

        .product-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image {
            width: 100px; /* Adjust image width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        .product-details {
            margin-left: 1rem; /* Add space between image and details */
        }

        .price {
            font-weight: bold;
        }

        .quantity-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto; /* Push buttons to the right */
        }

        .quantity-button {
            cursor: pointer;
            padding: 0.5rem;
            background-color: #ccc;
            border-radius: 0.25rem;
            margin: 0 0.25rem; /* Add space between buttons */
        }
    </style>
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

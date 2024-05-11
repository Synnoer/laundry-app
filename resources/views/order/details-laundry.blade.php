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
            justify-content: space-between;
            margin-bottom: 1rem; /* Add space between product containers */
            padding: 1rem;
            background-color: #f0f0f0; /* Light gray background */
            border-radius: 0.5rem; /* Rounded corners */
            width: 80%; /* Adjust width as needed */
        }

        .product-details {
            flex-grow: 1; /* Allow description to take remaining space */
            margin-left: 1rem; /* Add space between image and details */
        }

        .price-details {
            margin-top: 1rem; /* Add space between product container and price details */
            text-align: right; /* Align price details to the right */
        }
    </style>
    <x-slot name="header">
        <h1 class="font-semibold text-white">Order Details</h1>
    </x-slot>

    <main>
        <!-- Product Containers -->
        <div class="product-container">
            <img src="/path/to/shirt-image.png" alt="Shirt" class="product-image">
            <div class="product-details">
                <p class="description">Shirt Description</p>
                <p class="quantity">2 x 350gram</p>
            </div>
        </div>

        <!-- Total Pieces -->
        <div class="total-pcs">
            <p>Total Weight: 2Kg</p>
        </div>

        <!-- Service Details -->
        <div class="service-details">
            <p>Service: Dry Cleaning + Fold</p>
        </div>

        <!-- Fragrance Details -->
        <div class="fragrance-details">
            <p>Fragrance: Default</p>
        </div>

        <!-- Price Details -->
        <div class="price-details">
            <p>Total Price: Rp.</p> 
            <p>Subtotal: Rp.</p>
            <p>Discount: Rp.</p>
        </div>

        <!-- Order Dates -->
        <div class="order-dates">
            <p>Order Date: </p>
            <p>Completion Estimation Date: </p>
        </div>

        <!-- Checkout Button -->
        <x-primary-button class="primary-button mt-auto">{{ __('Checkout') }}</x-primary-button>
    </main>
</x-app-layout>

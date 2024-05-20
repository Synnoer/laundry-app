<x-app-layout>
    </style>
    <x-slot name="header">
        <h1 class="font-semibold text-white">Ongoing Order</h1>
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

    </main>
</x-app-layout>

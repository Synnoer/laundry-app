<nav x-data="{ open: false }" class="bg-white dark:bg-gray-200 border border-black dark:border-gray-700">
    <style>
        .nav-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 4rem; /* Space between buttons */
            flex-wrap: wrap; /* Wrap on smaller screens */
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .nav-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        @media screen and (max-width: 768px) {
            .nav-links {
                gap: 1rem; /* Reduce space between buttons on smaller screens */
            }
            .nav-item {
                font-size: 0.8rem; /* Adjust font size for smaller screens */
            }
        }
    </style>
    
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 nav-container">
        <div class="nav-links">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" iconSrc="/image/Icon-home-Grey.png">
                <div class="nav-item">
                    <span class="nav-label">{{ __('Home') }}</span>
                </div>
            </x-nav-link>

            <x-nav-link :href="route('order.index')" :active="request()->routeIs('order.index')" iconSrc="/image/Icon-Laundry-Grey.png"> 
                <div class="nav-item">
                    <span class="nav-label">{{ __('Laundry') }}</span>
                </div>
            </x-nav-link>

            <x-nav-link :href="route('membership.index')" :active="request()->routeIs('membership.index')" iconSrc="/image/Icon-Member-Grey.png">
                <div class="nav-item">
                    <span class="nav-label">{{ __('Membership') }}</span>
                </div>
            </x-nav-link>

            <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" iconSrc="/image/Icon-Account-Grey.png">
                <div class="nav-item">
                    <span class="nav-label">{{ __('Account') }}</span>
                </div>
            </x-nav-link>
        </div>
    </div>
</nav>

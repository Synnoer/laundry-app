<nav x-data="{ open: false }" class="bg-white dark:bg-gray-200 border border-black dark:border-black">
    <style>
        @media screen and (max-width: 768px) {
            .nav-item {
                font-size: 0.8rem; /* Adjust font size for smaller screens */
                margin-left: 0.1rem; /* Adjust margin for smaller screens */
            }
            .nav-icon{
                padding: 0.5rem;
            }
            
        }
    </style>
    
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-col items-center justify-center sm:flex-row sm:justify-between">
            <!-- Logo/Navigation Links -->
            <div class="space-y-4 sm:space-y-0 sm:space-x-14 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <div class="nav-item flex flex-col items-center">
                        <img src="/image/Icon-home-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Home') }}</span>
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('order.index')" :active="request()->routeIs('order.index')"> 
                    <div class="nav-item flex flex-col items-center">
                        <img src="/image/Icon-Laundry-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Laundry') }}</span>
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('membership.index')" :active="request()->routeIs('membership.index')">
                    <div class="nav-item flex flex-col items-center">
                        <img src="/image/Icon-Member-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Membership') }}</span>
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    <div class="nav-item flex flex-col items-center">
                        <img src="/image/Icon-Account-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Account') }}</span>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div>
</nav>

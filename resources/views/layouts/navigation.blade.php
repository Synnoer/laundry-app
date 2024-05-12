<nav x-data="{ open: false }" class="bg-white dark:bg-gray-200 border border-black dark:border-black">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-col items-center justify-center sm:flex-row sm:justify-between">
            <!-- Logo/Navigation Links -->
            <div class="space-y-4 sm:space-y-0 sm:space-x-14 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <div class="nav-item flex justify-center items-center">
                        <img src="/image/Icon-home-blue.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Home') }}</span>
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('order.index')"> 
                    <div class="nav-item flex justify-center items-center">
                        <img src="/image/Icon-Laundry-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Laundry') }}</span>
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('membership.index')">
                    <div class="nav-item flex justify-center items-center">
                        <img src="/image/Icon-Member-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Membership') }}</span>
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('profile.edit')">
                    <div class="nav-item flex justify-center items-center">
                        <img src="/image/Icon-Account-Grey.png" alt="" width="50" height="50" class="nav-icon">
                        <span class="nav-label">{{ __('Account') }}</span>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div>
</nav>

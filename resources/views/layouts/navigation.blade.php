<nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo/Navigation Links -->
                    <div class="container">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <div class="nav-item flex items-center justify-end">
                                <img src="/image/Icon-home-blue.png" alt="" width="50" height="50" class="nav-icon">
                                <span class="nav-label">{{ __('Home') }}</span>
                            </div>
                        </x-nav-link>

                        <x-nav-link :href="route('dashboard')">
                            <div class="nav-item flex items-center      ">
                                <img src="/image/Icon-Laundry-Grey.png" alt="" width="50" height="50" class="nav-icon">
                                <span class="nav-label">{{ __('Laundry') }}</span>
                            </div>
                        </x-nav-link>

                        <x-nav-link :href="route('dashboard')">
                            <div class="nav-item flex items-center justify-end">
                                <img src="/image/Icon-Member-Grey.png" alt="" width="50" height="50" class="nav-icon">
                                <span class="nav-label">{{ __('Membership') }}</span>
                            </div>
                        </x-nav-link>

                        <x-nav-link :href="route('profile.edit')">
                            <div class="nav-item flex items-center justify-end">
                                <img src="/image/Icon-Account-Grey.png" alt="" width="50" height="50" class="nav-icon">
                                <span class="nav-label">{{ __('Account') }}</span>
                            </div>
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<x-app-layout>
    <x-slot name="header">

    <div class=" flex items-center space-x-4">
                {{-- Notification Button --}}
                <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <a href="{{ route('notification') }}" >
                        <img src="/image/notification.png" alt="Settings" class="w-12 h-12 fill-current">
                    </a>
                    </svg>
                </button>

                {{-- Settings Dropdown --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                            <img src="/image/Edit-Button.png" alt="Settings" class="w-5 h-2 fill-current">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        {{-- <x-dropdown-link :href="route('login')">
                            {{ __('Sign In') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('register')">
                            {{ __('Sign Up') }}
                        </x-dropdown-link> --}}
                        <x-dropdown-link href="https://wa.me/+6289670169478?text=Help">
                            {{ __('Contact') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('about')">
                            {{ __('About Us') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
    </div>


    <div class="d-flex justify-between">
        <div class="flex items-center">
                <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Ahmad Noer Husaeni') }}
                </p>
        </div>
        <div class="flex items-center">
                <p class="font-semibold text-xs text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('08784872xxxx') }}
                </p>
        </div>
    </div>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

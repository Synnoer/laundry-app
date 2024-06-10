<x-app-layout>
    <x-slot name="header">

        <div class="flex justify-end">
            <div class="grid place-items-center">
                {{-- Notification Button --}}
                <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <a href="{{ route('notification') }}">
                        <img src="/image/notification.png" alt="Settings" class="w-12 h-12">
                    </a>
                    </svg>
                </button>
            </div>
            <div class="grid place-items-center pl-2">
                {{-- Settings Dropdown --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="w-auto text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                            <img src="/image/Edit-Button.png" alt="Settings" class=" fill-current object-contain w-8 h-6 ">
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
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <div class="flex justify-center w-75">
            <div class="w-fit">
                <button class="w-auto text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <img src="/Image/Foto.png" alt="Foto" class=" fill-current object-contain w-32 ">
                </button>
            </div>
            <div class="w-full flex flex-col justify-center">
                <div class="flex-initial">
                    <p class="font-semibold text-xl text-gray-200 dark:text-gray-800 leading-tight">
                        {{ (Auth::user()->name) }}
                    </p>
                </div>
                <div class="flex-initial">
                    <p class="font-semibold text-xs text-gray-200 dark:text-gray-800 leading-tight">
                        {{ (Auth::user()->phone) }}
                    </p>
                </div>
                <div class="flex-initial">
                    <p class="font-semibold text-xs text-gray-200 dark:text-gray-800 leading-tight">
                        @if (Auth::user()->membership && Auth::user()->membership->membershipType)
                            {{ Auth::user()->membership->membershipType->type_name }}
                        @else
                            Error!
                        @endif
                    </p>
                </div>
            </div>
        </div>

    </x-slot>

    <div class="w-screen px-4">
        <div class="w-fulll mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
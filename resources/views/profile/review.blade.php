<x-app-layout>
    <x-slot name="header">

        <div class="flex justify-end">
            <div class="grid place-items-center">
                {{-- Notification Button --}}
                <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <a href="{{ route('notification') }}">
                        <img src="/image/notification.png" alt="Settings" class="w-12 h-12">
                    </a>
                </button>
            </div>
            <div class="grid place-items-center pl-2">
                {{-- Settings Dropdown --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="w-auto text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                            <img src="/image/Edit-Button.png" alt="Settings" class="fill-current object-contain w-8 h-6">
                        </button>
                    </x-slot>
                    <x-slot name="content">
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
                    <img src="/Image/Foto.png" alt="Foto" class="fill-current object-contain w-32">
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
        <div class="w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Profile Information') }}
                        </h2>
                    </header>

                    <form class="mt-6 space-y-6">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="$user->name" readonly />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="$user->email" readonly />
                        </div>

                        <div>
                            <x-input-label for="gender" :value="__('Gender')" />
                            <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full" :value="$user->gender" readonly />
                        </div>

                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="$user->address" readonly />
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="{{ route('profile.edit') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                Edit Profile
                            </a>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>

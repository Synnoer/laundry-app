<x-app-layout>
    <x-slot name="header">
        {{-- Logo, Notification Button, and Settings Dropdown --}}
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="/image/logo-white.png" alt="Logo" class="w-13 h-12 mr-4">
                <h2 class="text-2xl font-semibold text-white">All Fresh Laundry</h2>
            </div>
            <div class="flex items-center space-x-4">
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
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        {{-- Membership Status --}}
        <div class="my-8 scroll-mx-0" id="Membership">
            <div class="bg-gradient-to-r from-sky-500 to-indigo-500 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-4">Membership Status</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white sm:rounded-lg">
                        <p class="text-sm text-black">Started from:</p>
                        <p class="border px-4 py-2">
                            {{ Auth::user()->membership->join_date ?? 'No service available' }}
                        </p>
                    </div>
                    <div class="bg-white sm:rounded-lg">
                        <p class="text-sm text-black">Ends:</p>
                        <p class="border px-4 py-2">
                            {{ Auth::user()->membership->end_date ?? 'No service available' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Session --}}
        <div class="my-8 scroll-ml-0" id="Session">
            <div class="bg-gradient-to-r from-sky-500 to-indigo-500 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-4">Session</h3>
                <div class="bg-white sm:rounded-lg">
                    <p class="text-sm text-black text-center">Session left:</p>
                    <p class="border px-4 py-2 text-center">
                        {{ Auth::user()->membership->session_left ?? 'No session available' }}
                    </p>
                </div>
            </div>
        </div>
        {{-- Charges --}}
        <div class="my-8 scroll-mr-0" id="Charges">
            <div class="bg-gradient-to-r from-sky-500 to-indigo-500 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-4">Charges</h3>
                <div class="bg-white sm:rounded-lg">
                    <p class="text-sm text-black text-center">Unpayed Charges:</p>
                    <p class="border px-4 py-2 text-center">
                        {{ Auth::user()->membership->session_left ?? 'No session available' }}
                    </p>
                </div>
            </div>
        </div>
    </x-slot>

    <main class="p-6 ">
        <h1 class="text-black text-left">Ongoing Order</h1>
        <div class="w-full bg-white sm:rounded-lg px-4 py-2 grid grid-cols-2">
            <div>
                <img src="/image/Logo-ongoing.png" class="object-center w-9 h-9">
            </div>
            <div>
                <h3 class="border-black px-4 py-2 text-center">{{ Auth::user()->order->product_details ?? 'order details'}}</h3>
                <div class="grid grid-cols-2 gap-2">
                    <p class="border-black px-4 py-2">{{ Auth::user()->order->order_date ?? 'start'}}</p>
                    <p class="border-black px-4 py-2">{{ Auth::user()->order->completion_estimation_date ?? 'end'}}</p>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

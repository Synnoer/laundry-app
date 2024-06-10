<x-app-layout>
    <x-slot name="header">
        {{-- Logo, Notification Button, and Settings Dropdown --}}
        <div class="fixed top-0 w-full flex justify-between items-center p-4 bg-transparant">
            <div class="flex items-center">
                <img src="/image/logo-white.png" alt="Logo" class="w-13 h-12 mr-4">
            </div>
            <div class="flex items-center space-x-4">
                {{-- Notification Button --}}
                <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <a href="{{ route('notification') }}">
                        <img src="/image/notification.png" alt="Settings" class="w-12 h-12 fill-current">
                    </a>
                </button>

                {{-- Settings Dropdown --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="w-auto text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                            <img src="/image/Edit-Button.png" alt="Settings" class="fill-current object-contain w-8 h-6">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="https://wa.me/+6285722842019?text=Help">
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

        <div class="w-full flex overflow-x-scroll snap-x snap-mandatory px-4 py-12">
            <div class="snap-always snap-center mx-4 min-w-[300px] max-w-[300px]">
                {{-- Session --}}
                <div class="my-8" id="Session">
                    <div class=" rounded-lg shadow-md p-6 h-full" style="background-image: url('/image/BG-Slide-1.png'); background-size: cover; background-position: center;">
                        <h3 class="text-xl font-bold text-white dark:text-white mb-4">Session</h3>
                        <div class="bg-white rounded-lg p-4">
                            <p class="text-sm text-black text-center">Session left:</p>
                            <p class="border px-4 py-2 mt-2 text-center">
                                {{ Auth::user()->membership->session_left ?? 'No session available' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="snap-always snap-center mx-4 min-w-[300px] max-w-[300px]">
                {{-- Membership Status --}}
                <div class="my-8" id="Membership">
                    <div class=" rounded-lg shadow-md p-6 h-full" style="background-image: url('/image/BG-Slide-2.png'); background-size: cover; background-position: center;">
                        <h3 class="text-xl font-bold text-white dark:text-white mb-4">Membership Status</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4">
                                <p class="text-sm text-black">Started from:</p>
                                <p class="border px-4 py-2 mt-2">
                                    {{ Auth::user()->membership->join_date ?? 'No service available' }}
                                </p>
                            </div>
                            <div class="bg-white rounded-lg p-4">
                                <p class="text-sm text-black">Ends:</p>
                                <p class="border px-4 py-2 mt-2">
                                    {{ Auth::user()->membership->end_date ?? 'No service available' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="snap-always snap-center mx-4 min-w-[300px] max-w-[300px]">
                {{-- Charges --}}
                <div class="my-8" id="Charges">
                    <div class=" rounded-lg shadow-md p-6 h-full" style="background-image: url('/image/BG-Slide-3.png'); background-size: cover; background-position: center;">
                        <h3 class="text-xl font-bold text-white dark:text-white mb-4">Charges</h3>
                        <div class="bg-white rounded-lg p-4">
                            <p class="text-sm text-black text-center">Unpaid Charges:</p>
                            <p class="border px-4 py-2 mt-2 text-center">
                                {{ Auth::user()->membership->unpaid_charges ?? 'Coming Soon' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <main class="p-6 flex flex-col justify-between h-full">
        <div class="">
            <div class="mb-6 mt-6">
                <p class="text-black text-2xl font-bold">Ongoing Order</p>
            </div>
            @if($ongoingOrders->isNotEmpty())
            <div class="w-full border-solid bg-white sm:rounded-lg flex flex-col items-start">
                @foreach($ongoingOrders as $order)
                <div class="w-full p-4 border rounded-lg shadow-lg mb-2 border-gray-200 bg-gray-100">
                    <div class="items-center">
                            <div class="flex">
                                <div class="w-1/4 flex flex-col justify-center">
                                    <a href="/ongoing/{{ $order->id }}">
                                        <img src="/image/Logo-ongoing.png" class="object-center w-9 h-9">
                                    </button>
                                </div>
                                <div class="w-3/4">
                                    <h3 class="border-black px-4 py-2 text-center">
                                        @foreach($order->product_details as $detail)
                                        {{ $detail['name'] ?? 'Unknown product' }} x {{ $detail['quantity'] ?? 0 }},
                                        @endforeach
                                    </h3>
                                    <div class="grid grid-cols-2 gap-2">
                                        <p class="border-black px-4 py-2">Order : {{ $order->order_date->format('Y-m-d') ?? 'start' }}</p>
                                        <p class="border-black px-4 py-2">Estimate : {{ $order->completion_estimation_date->format('Y-m-d') ?? 'end' }}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <div>
                <p class="text-black text-2xl font-bold">Recent Order</p>
            </div>
            @if($recentOrders->isNotEmpty())
            <div class="w-full border-solid bg-white sm:rounded-lg flex flex-col items-start">
                @foreach($recentOrders as $order)
                <!--<div>
                <img src="/image/Logo-ongoing.png" class="object-center w-9 h-9">
            </div>
            <div>
                <h3 class="border-black py-2 text-center">
                    @foreach($order->product_details as $detail)
                    {{ $detail['name'] ?? 'Unknown product' }} x {{ $detail['quantity'] ?? 0 }},
                    @endforeach
                </h3>
                <div class="grid grid-cols-2 gap-2">
                    <p class="border-black px-4 py-2">Order : {{ $order->order_date->format('Y-m-d') ?? 'start' }}</p>
                    <p class="border-black px-4 py-2">Estimate : {{ $order->completion_estimation_date->format('Y-m-d') ?? 'end' }}</p>
                </div>
            </div>-->
                <div class="w-full p-4 border rounded-lg shadow-lg mb-2 border-gray-200 bg-gray-100">
                    <div class="items-center">
                            <div class="flex">
                                <div class="w-1/4 flex flex-col justify-center">
                                        <img src="/image/Logo-ongoing.png" class=" w-9 h-9">
                                </div>
                                <div class="w-3/4">
                                    <h3 class="border-black px-4 py-2 text-center">
                                        @foreach($order->product_details as $detail)
                                        {{ $detail['name'] ?? 'Unknown product' }} x {{ $detail['quantity'] ?? 0 }},
                                        @endforeach
                                    </h3>
                                    <div class="grid grid-cols-2 gap-2">
                                        <p class="border-black px-4 py-2">Order : {{ $order->order_date->format('Y-m-d') ?? 'start' }}</p>
                                        <p class="border-black px-4 py-2">Estimate : {{ $order->completion_estimation_date->format('Y-m-d') ?? 'end' }}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </main>    
</x-app-layout>
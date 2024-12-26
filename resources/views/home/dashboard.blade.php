<x-app-layout>
    <x-slot name="header">
        <!-- Top Navigation -->
        <div class="fixed top-0 w-full flex justify-between items-center p-4 bg-transparent">
            <div class="flex items-center">
                <img src="/image/logo-white.png" alt="Logo" class="w-13 h-12 mr-4">
            </div>
            <div class="flex items-center space-x-4">
                <!-- Notification Button -->
                <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <a href="{{ route('notification') }}">
                        <img src="/image/notification.png" alt="Notifications" class="w-12 h-12">
                    </a>
                </button>

                <!-- Settings Dropdown -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="w-auto text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                            <img src="/image/Edit-Button.png" alt="Settings" class="object-contain w-8 h-6">
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

        <!-- Card Section -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 px-4 py-20">
            <!-- Session Card -->
            <div class="bg-cover bg-center rounded-lg shadow-md p-6" style="background-image: url('/image/BG-Slide-1.png');">
                <h3 class="text-xl font-bold text-white mb-4">Session</h3>
                <div class="bg-white rounded-lg p-4">
                    <p class="text-sm text-black text-center">Session left:</p>
                    <p class="border px-4 py-2 mt-2 text-center">
                        {{ Auth::user()->membership->session_left ?? 'No session available' }}
                    </p>
                </div>
            </div>

            <!-- Membership Card -->
            <div class="bg-cover bg-center rounded-lg shadow-md p-6" style="background-image: url('/image/BG-Slide-2.png');">
                <h3 class="text-xl font-bold text-white mb-4">Membership Status</h3>
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

            <!-- Charges Card -->
            <div class="bg-cover bg-center rounded-lg shadow-md p-6" style="background-image: url('/image/BG-Slide-3.png');">
                <h3 class="text-xl font-bold text-white mb-4">Charges</h3>
                <div class="bg-white rounded-lg p-4">
                    <p class="text-sm text-black text-center">Unpaid Charges:</p>
                    <p class="border px-4 py-2 mt-2 text-center">
                        {{ Auth::user()->membership->unpaid_charges ?? 'Coming Soon' }}
                    </p>
                </div>
            </div>
        </div>
    </x-slot>

    <!-- Main Content -->
    <main class="p-6">
        <!-- Ongoing Orders -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Ongoing Orders</h2>
            @if($ongoingOrders->isNotEmpty())
            <div class="grid gap-6">
                @foreach($ongoingOrders as $order)
                <div class="bg-gray-100 border rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <img src="/image/Logo-ongoing.png" class="w-12 h-12 mr-4">
                        <div>
                            <h3 class="font-semibold">
                                @foreach($order->product_details as $detail)
                                {{ $detail['name'] ?? 'Unknown product' }} x {{ $detail['quantity'] ?? 0 }}
                                @endforeach
                            </h3>
                            <div class="text-sm text-gray-700">
                                <p>Order: {{ $order->order_date->format('Y-m-d') ?? 'start' }}</p>
                                <p>Estimate: {{ $order->completion_estimation_date->format('Y-m-d') ?? 'end' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p>No ongoing orders available.</p>
            @endif
        </section>

        <!-- Recent Orders -->
        <section>
            <h2 class="text-2xl font-bold mb-4">Recent Orders</h2>
            @if($recentOrders->isNotEmpty())
            <div class="grid gap-6">
                @foreach($recentOrders as $order)
                <div class="bg-gray-100 border rounded-lg shadow p-4">
                    <div class="flex items-center">
                        <img src="/image/Logo-ongoing.png" class="w-12 h-12 mr-4">
                        <div>
                            <h3 class="font-semibold">
                                @foreach($order->product_details as $detail)
                                {{ $detail['name'] ?? 'Unknown product' }} x {{ $detail['quantity'] ?? 0 }}
                                @endforeach
                            </h3>
                            <div class="text-sm text-gray-700">
                                <p>Order: {{ $order->order_date->format('Y-m-d') ?? 'start' }}</p>
                                <p>Estimate: {{ $order->completion_estimation_date->format('Y-m-d') ?? 'end' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p>No recent orders available.</p>
            @endif
        </section>
    </main>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Notifications
            </button>
        </div>
    </x-slot>

    <main class="p-6">
        <div class="container mx-auto">

            <div class="grid gap-4">
                @forelse($notifications as $notification)
                    <div class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-gray-300">
                        <div class="mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-6-3h6m-6 0V4m3-1a9 9 0 110 18 9 9 0 010-18z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $notification->data['message'] ?? 'Notification' }}</h3>
                            <p class="text-sm text-gray-600">
                                Order ID: {{ $notification->data['order_id'] ?? 'N/A' }}
                            </p>
                            <p class="text-xs text-gray-500 mt-1">{{ $notification->created_at->format('d M Y, h:i A') }}</p>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-gray-500 p-4">
                        <p>No notifications found. You’re all caught up!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
</x-app-layout>

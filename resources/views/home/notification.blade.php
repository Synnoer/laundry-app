<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Notification
            </button>
        </div>

    </x-slot>
    {{-- notip --}}
    <div class="absolute inset-x-0 top-32 ">
        <div class="space-y-4 mt-0 px-4 ">
            <div class="border border-gray-300 rounded-lg p-4 shadow-sm">
                <h3 class="font-semibold text-base">Activation Of Membership</h3>
                <p class="text-xs text-gray-600">Membership activated! Membership ends in dd/mm/yyyy</p>
            </div>
            <div class="border border-gray-300 rounded-lg p-4 shadow-sm">
                <h3 class="font-semibold text-base">Activation Of Membership</h3>
                <p class="text-xs text-gray-600">Membership activated! Membership ends in dd/mm/yyyy</p>
            </div>
        </div>
        <div class="space-y-4 mt-0 px-4">
            <div class="border border-gray-300 rounded-lg p-4 shadow-sm">
                <h3 class="font-semibold text-base">Activation Of Membership</h3>
                <p class="text-xs text-gray-600">Membership activated! Membership ends in dd/mm/yyyy</p>
            </div>
            <div class="border border-gray-300 rounded-lg p-4 shadow-sm">
                <h3 class="font-semibold text-base">Activation Of Membership</h3>
                <p class="text-xs text-gray-600">Membership activated! Membership ends in dd/mm/yyyy</p>
            </div>
        </div>
    </div>
</x-app-layout>
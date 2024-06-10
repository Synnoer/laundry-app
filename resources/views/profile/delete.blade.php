<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Profile
            </button>
        </div>
    </x-slot>

<div class="w-screen px-4">
    <div class="w-fulll mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="mt-6 flex justify-start">
            <a href="{{ route('profile.destroy') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                Delete
            </a>
        </div>
        </div>
    </div>
</div>
</x-app-layout>
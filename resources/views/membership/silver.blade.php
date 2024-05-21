<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Get Membership
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-gradient-to-r from-zinc-50 to-zinc-400 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold">Silver Membership</h2>
                    <p>Rp 30.000/month</p>
                </div>
            </div>
        </div>

        <div class="mt-6 bg-white shadow sm:rounded-lg p-6">
            <h3 class="text-lg font-semibold mb-4">Membership Details</h3>
            <ul class="list-disc list-inside">
                <li>Membership duration: 2 weeks</li>
                <li>Total weight each session: 3 Kg</li>
                <li>Total sessions: 2</li>
                <li>Available Service: Dry cleaning + Fold</li>
            </ul>
        </div>
        
        <div class="flex justify-center items-center my-8">
            <a href="https://wa.me/+6282321568554?text=Im%20interested%20in%20buying%20the%20Silver%20membership" class="inline-flex items-center px-6 py-2 bg-gray-800 dark:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-black focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                {{ __('Buy') }}
            </a>
        </div>
    </div>
</x-app-layout>

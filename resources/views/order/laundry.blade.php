<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-white">Make an Order</h1>
    </x-slot>

    <div class="my-8 flex flex-col justify-center items-center space-y-10">
        <x-dropdown width="48">
            <x-slot name="trigger">
                <button class="flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md shadow-md mr-4">
                    <img src="/image/date-laundry.png" alt="Date Image" class="w-5 h-5 mr-2" />
                    <span>{{ __('Choose Date') }}</span>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link>
                    {{ __('Date 1') }}
                </x-dropdown-link>
                <x-dropdown-link>
                    {{ __('Date 2') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    
        <x-dropdown width="48">
            <x-slot name="trigger">
                <button class="flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md shadow-md">
                    <img src="/image/fragrance-laundry.png" alt="Fragrance Image" class="w-5 h-5 mr-2" />
                    <span>{{ __('Choose Fragrance') }}</span>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link>
                    {{ __('Fragrance 1') }}
                </x-dropdown-link>
                <x-dropdown-link>
                    {{ __('Fragrance 2') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
    <div class="my-8">
        <p class="text-gray-700">Service: </p>
    </div>

    <x-primary-button class="primary-button mt-auto">{{ __('Next') }}</x-primary-button>
</x-app-layout>

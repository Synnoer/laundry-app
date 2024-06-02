<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Make an Order
            </button>
        </div>
    </x-slot>

    <div class="my-8 flex flex-col justify-center items-center space-y-10">
        <!-- Choose Order Date -->
        <x-dropdown width="48">
            <x-slot name="trigger">
                <button class="flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md shadow-md mr-4">
                    <img src="/image/date-laundry.png" alt="Date Image" class="w-5 h-5 mr-2" />
                    <span>{{ __('Choose Date') }}</span>
                </button>
            </x-slot>
            <x-slot name="content">
                @foreach ($order_dates as $date)
                    <x-dropdown-link onclick="setOrderDate('{{ $date }}')">
                        {{ $date }}
                    </x-dropdown-link>
                @endforeach
            </x-slot>
        </x-dropdown>
        <input class="bg-gray-200" name="order_date" id="order_date">

        <!-- Choose Fragrance -->
        <x-dropdown width="48">
            <x-slot name="trigger">
                <button class="flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md shadow-md">
                    <img src="/image/fragrance.png" alt="Fragrance Image" class="w-5 h-5 mr-2" />
                    <span>{{ __('Choose Fragrance') }}</span>
                </button>
            </x-slot>
            <x-slot name="content">
                @foreach ($fragrances as $fragrance)
                    <x-dropdown-link onclick="setFragrance('{{ $fragrance->fragrance_name }}')">
                        {{ $fragrance->fragrance_name }}
                    </x-dropdown-link>
                @endforeach
            </x-slot>
        </x-dropdown>
        <input class="bg-gray-200" name="fragrance" id="fragrance">
    </div>

    <div class="my-8">
        <p class="text-gray-700">Service: {{ Auth::user()->membership->membershipType->service }}</p>
    </div>

    <div class="my-8 flex flex-col justify-center items-center space-y-10">
    </div>
  
    <div class="next-button text-center">
        <form method="GET" action="{{ route('order.add') }}">
            <input type="hidden" name="order_date" id="form_order_date">
            <input type="hidden" name="fragrance" id="form_fragrance">
            <button type="submit" class="inline-flex items-center px-6 py-2 bg-gray-800 dark:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-black focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                {{ __('Next') }}
            </button>
        </form>
    </div>

    @if (session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
    @endif

    <script>
        function setOrderDate(date) {
            document.getElementById('order_date').value = date;
            document.getElementById('form_order_date').value = date;
        }

        function setFragrance(fragrance) {
            document.getElementById('fragrance').value = fragrance;
            document.getElementById('form_fragrance').value = fragrance;
        }
    </script>
</x-app-layout>

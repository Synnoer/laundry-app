<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Make an Order
            </button>
        </div>
    </x-slot>

    <main class="flex flex-col justify-between h-full">
        <div>
            <div class="my-8 flex flex-col justify-center items-center space-y-10">
                <!-- Choose Order Date -->
                <select id="order_date_select" name="order_date" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" disabled selected>{{ __('Select Date') }}</option>
                    @foreach ($order_dates as $date)
                    <option value="{{ $date }}" > {{ $date }} </option>
                    @endforeach 
                </select>

                <!-- Choose Fragrance -->
                <select id="fragrance_select" name="fragrance" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" disabled selected>{{ __('Select Fragrace') }}</option>
                    @foreach ($fragrances as $fragrance)
                    <option value="{{ $fragrance->fragrance_name }}" > {{ $fragrance->fragrance_name }} </option>
                    @endforeach 
                </select>
            </div>

            <div class="my-2">
                <p class="text-gray-700">Service: {{ Auth::user()->membership->membershipType->service }}</p>
            </div>

            <div class="next-button text-center">
                <form method="GET" action="{{ route('order.add') }}" onsubmit="return setHiddenFields()">
                    <input type="hidden" name="order_date" id="form_order_date">
                    <input type="hidden" name="fragrance" id="form_fragrance">
                    <button type="submit" class="inline-flex items-center px-6 py-2 bg-gray-800 dark:bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-black focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        {{ __('Next') }}
                    </button>
                </form>
            </div>
        </div>


        @if (session('error'))
        <script>
            alert('{{ session(' error ') }}');
        </script>
        @endif

    </main>

    <script>
        function setHiddenFields() {
            const orderDateSelect = document.getElementById('order_date_select');
            const fragranceSelect = document.getElementById('fragrance_select');
            const orderDate = orderDateSelect.options[orderDateSelect.selectedIndex].value;
            const fragrance = fragranceSelect.options[fragranceSelect.selectedIndex].value;

            document.getElementById('form_order_date').value = orderDate;
            document.getElementById('form_fragrance').value = fragrance;
            
            return true; // Allow form submission
        }
    </script>
</x-app-layout>
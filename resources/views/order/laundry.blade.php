<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white rounded-md shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Make an Order
            </button>
        </div>
    </x-slot>

    <main class="flex flex-col justify-between h-full py-8 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <!-- Form Section -->
            <div class="my-8 space-y-8">
                <!-- Choose Order Date -->
                <div>
                    <label for="order_date_select" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Select Date') }}</label>
                    <select id="order_date_select" name="order_date" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        <option value="" disabled selected>{{ __('Select Date') }}</option>
                        @foreach ($order_dates as $date)
                        <option value="{{ $date }}">{{ $date }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Choose Fragrance -->
                <div>
                    <label for="fragrance_select" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Select Fragrance') }}</label>
                    <select id="fragrance_select" name="fragrance" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        <option value="" disabled selected>{{ __('Select Fragrance') }}</option>
                        @foreach ($fragrances as $fragrance)
                        <option value="{{ $fragrance->fragrance_name }}">{{ $fragrance->fragrance_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Service Info -->
            <div class="my-4 text-gray-700 text-center">
                <p><strong>Service:</strong> {{ Auth::user()->membership->membershipType->service }}</p>
            </div>

            <!-- Next Button -->
            <div class="text-center mt-8">
                <form method="GET" action="{{ route('order.add') }}" onsubmit="return setHiddenFields()">
                    <input type="hidden" name="order_date" id="form_order_date">
                    <input type="hidden" name="fragrance" id="form_fragrance">
                    <button type="submit" class="inline-flex items-center px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white font-semibold rounded-md shadow-md transition ease-in-out duration-150">
                        {{ __('Next') }}
                    </button>
                </form>
            </div>
        </div>

        <!-- Error Alert -->
        @if (session('error'))
        <div class="mt-6 max-w-3xl mx-auto">
            <div class="p-4 bg-red-100 text-red-700 rounded-lg shadow-md">
                {{ session('error') }}
            </div>
        </div>
        @endif
    </main>

    <script>
        function setHiddenFields() {
            const orderDateSelect = document.getElementById('order_date_select');
            const fragranceSelect = document.getElementById('fragrance_select');
            const orderDate = orderDateSelect.value;
            const fragrance = fragranceSelect.value;

            document.getElementById('form_order_date').value = orderDate;
            document.getElementById('form_fragrance').value = fragrance;

            return true; // Allow form submission
        }
    </script>
</x-app-layout>

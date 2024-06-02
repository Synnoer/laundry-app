<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome Admin!</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                            <p class="text-2xl">{{ $totalUsers }}</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-gray-700">Total Orders</h3>
                            <p class="text-2xl">{{ $totalOrders }}</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold text-gray-700">Pending Orders</h3>
                            <p class="text-2xl">{{ $pendingOrders }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content p-6 bg-gray-100">
                    <center>
                        <h3 class="text-lg font-semibold mb-2">Order Data</h3>
                        <div class="mb-6">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Order Date</th>
                                        <th class="px-4 py-2">Completion Date</th>
                                        <th class="px-4 py-2">User</th>
                                        <th class="px-4 py-2">Products</th>
                                        <th class="px-4 py-2">Total Weight</th>
                                        <th class="px-4 py-2">Service</th>
                                        <th class="px-4 py-2">Fragrance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $order->order_date}}</td>
                                            <td class="border px-4 py-2">{{ $order->completion_estimation_date}}</td>
                                            <td class="border px-4 py-2">{{ $order->user->name }}</td>
                                            <td class="border px-4 py-2">
                                                <ul>
                                                    @foreach ($order->product_details as $product)
                                                        <li>{{ $product['name'] }} ({{ $product['quantity'] }})</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="border px-4 py-2">{{ $order->total_weight }} g</td>
                                            <td class="border px-4 py-2">{{ $order->service }}</td>
                                            <td class="border px-4 py-2">{{ $order->fragrance }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

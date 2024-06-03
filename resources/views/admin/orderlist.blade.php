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
                                        <th class="border px-4 py-2">Order Date</th>
                                        <th class="border px-4 py-2">Completion Date</th>
                                        <th class="border px-4 py-2">User</th>
                                        <th class="border px-4 py-2">Products</th>
                                        <th class="border px-4 py-2">Total Weight</th>
                                        <th class="border px-4 py-2">Service</th>
                                        <th class="border px-4 py-2">Fragrance</th>
                                        <th class="border px-4 py-2">Status</th>
                                        <th class="border px-4 py-2">Action</th>
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
                                                @foreach($order->product_details as $detail)
                                                    {{ $detail['name'] ?? 'Unknown product' }} x {{ $detail['quantity'] ?? 0 }},
                                                @endforeach
                                                </ul>
                                            </td>
                                            <td class="border px-4 py-2">{{ $order->total_weight }} g</td>
                                            <td class="border px-4 py-2">{{ $order->service }}</td>
                                            <td class="border px-4 py-2">{{ $order->fragrance }}</td>
                                            @if($order->status==0)
                                            <td class="border px-4 py-2">Awaiting Pickup</td>
                                            @elseif($order->status==1)
                                            <td class="border px-4 py-2">Order Pickup</td>
                                            @elseif($order->status==2)
                                            <td class="border px-4 py-2">Order Arrives At The Laundry</td>
                                            @elseif($order->status==3)
                                            <td class="border px-4 py-2">Order is Being Washed</td>
                                            @elseif($order->status==4)
                                            <td class="border px-4 py-2">Order Finished Washing</td>
                                            @elseif($order->status==5)
                                            <td class="border px-4 py-2">Order Delivered to Destination</td>
                                            @elseif($order->status==6)
                                            <td class="border px-4 py-2">Order Arrives at Destination</td>
                                            @elseif($order->status==7)
                                            <td class="border px-4 py-2">Completed</td>
                                            @endif
                                            @if($order->status<=6)
                                            <td class="border px-4 py-2">
                                                <form action="{{ route('admin.nextStatus', $order->id) }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded">Next</button>
                                                </form>
                                            </td>
                                            @endif
                                            @if($order->status==7)
                                            <td class="border px-4 py-2">
                                                    <button class="bg-green-500 text-white px-2 py-1 rounded" disabled>Complete</button>
                                            </td>
                                            @endif
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

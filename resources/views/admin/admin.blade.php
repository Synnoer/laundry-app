<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="/image/logo-white.png" alt="Logo" class="w-13 h-12 mr-4">
                <h2 class="text-2xl font-semibold text-white">Home</h2>
            </div>
            <a href="/logout" class="text-white hover:text-gray-300">Logout</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-400 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome Admin!</h2>
                </div>
                <div class="content p-6 bg-gray-100">
                    <center>
                        <!-- User Data -->
                        <h3 class="text-lg font-semibold mb-2">User Data</h3>
                        <div class="mb-6">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Gender</th>
                                        <th class="px-4 py-2">Address</th>
                                        <th class="px-4 py-2">Phone</th>
                                        <th class="px-4 py-2">Email</th>
                                        <th class="px-4 py-2">Role</th>
                                        <th class="px-4 py-2">Membership</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $user->name }}</td>
                                            <td class="border px-4 py-2">{{ $user->gender }}</td>
                                            <td class="border px-4 py-2">{{ $user->address }}</td>
                                            <td class="border px-4 py-2">{{ $user->phone }}</td>
                                            <td class="border px-4 py-2">{{ $user->email }}</td>
                                            <td class="border px-4 py-2">{{ $user->role->role_name }}</td>
                                            <td class="border px-4 py-2">
                                                <form action="{{ route('admin.updateMembership') }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                    <select name="membership_id" class="membership-select">
                                                        @foreach ($memberships as $membership)
                                                            <option value="{{ $membership->id }}" {{ $user->membership_id == $membership->id ? 'selected' : '' }}>
                                                                {{ $membership->membershipType->type_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="ml-2 bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Order Data -->
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
                                            <td class="border px-4 py-2">{{ $order->order_date->format('Y-m-d') }}</td>
                                            <td class="border px-4 py-2">{{ $order->completion_estimation_date->format('Y-m-d') }}</td>
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
</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let selects = document.querySelectorAll('.membership-select');

        selects.forEach(select => {
            select.addEventListener('change', function () {
                let userId = this.dataset.userId;
                let membershipId = this.value;

                // Send AJAX request to update membership
                fetch(`/admin/memberships/${userId}`, {
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        membership_id: membershipId
                    })
                })
                .then(response => {
                    if (response.ok) {
                        alert('Membership updated successfully');
                    } else {
                        alert('Failed to update membership');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
</script>

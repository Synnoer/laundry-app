<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content p-6 bg-gray-100">
                    <center>
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
                                                <form action="{{ route('admin.updateMembership') }}" method="POST" class="membership-form">
                                                    @csrf
                                                    @method('patch')
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                    <select name="membership_id" class="membership-select">
                                                        @foreach ($membership_types as $membership_type)
                                                            <option value="{{ $membership_type->id }}" {{ $user->membership && $user->membership->membership_type_id == $membership_type->id ? 'selected' : '' }}>
                                                                {{ $membership_type->type_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="ml-2 bg-blue-500 text-white px-2 py-1 rounded">Update</button>
                                                </form>
                                            </td>
                                            <td class="px-4 py-2">
                                                <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if (session('success'))
                                    <script>
                                        alert('{{ session('success') }}');
                                    </script>
                            @endif
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let selects = document.querySelectorAll('.membership-select');

        selects.forEach(select => {
            select.addEventListener('change', function () {
                let userId = this.getAttribute('data-user-id');
                let membershipId = this.value;

                // Send AJAX request to update membership
                fetch(`/admin/memberships/${userId}`, {
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        user_id: userId,
                        membership_id: membershipId
                    })
                })
                .then(response => {
                    if (response.ok) {
                        alert('Membership updated successfully');
                    }
                    // else {
                    //     alert('Failed to update membership');
                    // }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating the membership');
                });
            });
        });
    });
</script>


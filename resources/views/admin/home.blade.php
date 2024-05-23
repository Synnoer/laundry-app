<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-400 border-b border-gray-200 text-center">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome Admin!</h2>
                    <div class="my-8 scroll-mx-0">
                        <div class="bg-gradient-to-r from-sky-500 to-indigo-500 rounded-lg shadow-md p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-200 mb-4">Home</h3>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-white sm:rounded-lg px-4 py-2">
                                    <a href="/admin/userlist" class="text-sm text-black">User List</a>
                                </div>
                                <div class="bg-white sm:rounded-lg px-4 py-2">
                                    <a href="/admin/orderlist" class="text-sm text-black">Order List</a>
                                </div>
                                <div class="bg-white sm:rounded-lg px-4 py-2">
                                    <a href="/admin/editdatabase" class="text-sm text-black">Edit Database</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

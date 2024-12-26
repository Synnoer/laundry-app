<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-end">
            <div class="grid place-items-center">
                {{-- Notification Button --}}
                <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                    <a href="{{ route('notification') }}">
                        <img src="/image/notification.png" alt="View Notifications" class="w-12 h-12">
                    </a>
                </button>
            </div>
            <div class="grid place-items-center pl-2">
                {{-- Settings Dropdown --}}
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="w-auto text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                            <img src="/image/Edit-Button.png" alt="Edit Settings" class="object-contain w-8 h-6">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="https://wa.me/+6289670169478?text=Help">
                            {{ __('Contact') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('about')">
                            {{ __('About Us') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <div class="flex justify-center w-full mt-4">
            <div class="w-fit">
                <img src="{{ Auth::user()->avatar_url ?? '/image/default_avatar.png' }}" alt="User Avatar" class="object-cover w-32 h-32 rounded-full">
            </div>
            <div class="w-full flex flex-col justify-center ml-4">
                <p class="font-semibold text-xl text-black leading-tight">
                    {{ Auth::user()->name ?? 'Unknown User' }}
                </p>
                <p class="font-semibold text-sm text-black">
                    {{ Auth::user()->phone ?? 'No Phone Number' }}
                </p>
                <p class="font-semibold text-sm text-black">
                    {{ Auth::user()->membership->membershipType->type_name ?? 'No Membership' }}
                </p>
            </div>
        </div>
    </x-slot>

    <div class="w-full px-4 mt-6">
        <div class="w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section class="space-y-6">
                    <h2 class="text-lg font-semibold text-black">Contact Information</h2>
                    
                    {{-- Email Section --}}
                    <div class="flex items-center gap-4 border border-black p-4 rounded-md">
                        <img src="/image/email.png" alt="Email Icon" class="object-contain w-9 h-9">
                        <p class="text-sm font-medium text-black">
                            {{ Auth::user()->email ?? 'No Email Provided' }}
                        </p>
                    </div>
                    
                    {{-- Gender Section --}}
                    <div class="flex items-center gap-4 border border-black p-4 rounded-md">
                        <img src="/image/icon-male.png" alt="Gender Icon" class="object-contain w-9 h-9">
                        <p class="text-sm font-medium text-black">
                            {{ Auth::user()->gender ?? 'Not Specified' }}
                        </p>
                    </div>
                    
                    {{-- Address Section --}}
                    <div class="flex items-center gap-4 border border-black p-4 rounded-md">
                        <img src="/image/address.png" alt="Address Icon" class="object-contain w-9 h-9">
                        <p class="text-sm font-medium text-black">
                            {{ Auth::user()->address ?? 'No Address Provided' }}
                        </p>
                    </div>

                    {{-- Edit Profile Button --}}
                    <div class="flex justify-center mt-6">
                        <a href="{{ route('profile.edit') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                            {{ __('Edit Profile') }}
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>

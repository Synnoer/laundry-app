<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                About
            </button>
        </div>

        <div class="my-8">
            <p>
                We are the modern solution to your laundry needs. At All Fresh, we bring you the convenience of keeping your clothes clean and tidy without the hassle of visiting a laundry facility. We provide reliable and efficient laundry pickup and delivery services, allowing you to focus on more important aspects of your life.
            </p>
            <p>
                Our mission is to provide the best laundry experience for our customers. We believe that everyone deserves to enjoy clean and fresh-smelling clothes without spending a lot of time and effort. With our technology and services, we are committed to changing the way you perceive laundry chores.
            </p>
        </div>
    </x-slot>
</x-app-layout>

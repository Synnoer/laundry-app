<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <button onclick="window.history.back()" class="flex items-center px-4 py-2 font-semibold text-xl text-white leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                About Us
            </button>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-100 to-blue-300">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-8 bg-white shadow-xl rounded-lg transform transition hover:scale-105">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-4xl font-extrabold text-blue-700 mb-6">Welcome to All Fresh!</h2>
                    <p class="text-lg leading-relaxed text-gray-800 mb-6">
                        We are your modern solution to all laundry needs. At <span class="text-blue-500 font-semibold">All Fresh</span>, we bring convenience to your doorstep, ensuring your clothes remain clean and fresh while you focus on what truly matters.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Our Mission</h3>
                            <p class="text-gray-700 leading-relaxed">
                                We aim to revolutionize laundry services by providing reliable, efficient, and high-quality solutions. Our mission is to deliver a seamless and hassle-free experience so that every customer can enjoy freshly laundered clothes without the stress.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Why Choose Us?</h3>
                            <p class="text-gray-700 leading-relaxed">
                                With our cutting-edge technology and professional services, we’re here to redefine your laundry routine. Your satisfaction is our priority, and we go above and beyond to exceed your expectations.
                            </p>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4">Our Advantages</h3>
                        <ul class="list-inside list-disc space-y-4 text-gray-800">
                            <li><strong>Customer Convenience:</strong> From simple bookings to timely delivery, we ensure your experience is effortless.</li>
                            <li><strong>Unmatched Quality:</strong> Collaborating with trusted professionals, we treat your garments with care and expertise.</li>
                            <li><strong>Affordable Options:</strong> We offer flexible packages tailored to your budget and lifestyle.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

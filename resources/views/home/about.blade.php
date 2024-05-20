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
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold mb-4">About Us</h2>
                    <p class="mb-4">We are the modern solution to your laundry needs. At All Fresh, we bring you the convenience of keeping your clothes clean and tidy without the hassle of visiting a laundry facility. We provide reliable and efficient laundry pickup and delivery services, allowing you to focus on more important aspects of your life.</p>
                    <p class="mb-4">Our mission is to provide the best laundry experience for our customers. We believe that everyone deserves to enjoy clean and fresh-smelling clothes without spending a lot of time and effort. With our technology and services, we are committed to changing the way you perceive laundry chores.</p>
                    <h3 class="text-xl font-semibold mb-2">Our Advantages</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Customer Convenience and Satisfaction:</strong> We prioritize customer convenience and satisfaction at every step of our service. From a simple booking process to timely delivery, we always put your needs and preferences first.</li>
                        <li><strong>Quality and Professionalism:</strong> We collaborate with trusted laundry facilities that uphold high-quality standards. Our team consists of experienced professionals in the industry, ensuring that your clothes are treated with care and expertise.</li>
                        <li><strong>Flexibility and Affordability:</strong> We understand that every customer has different needs. Therefore, we offer various flexible and affordable service packages to fit your budget and preferences.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

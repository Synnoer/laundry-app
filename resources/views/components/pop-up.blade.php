<div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
    <div class="bg-white dark:bg-gray-900 shadow-lg rounded-lg w-full max-w-md">
        <!-- Header -->
        <div class="px-4 py-2 bg-gray-200 dark:bg-gray-700">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Popup Header</h2>
        </div>
        
        <!-- Image -->
        <div class="p-4">
            <img src="/path/to/image.jpg" alt="Popup Image" class="w-full h-auto">
        </div>
        
        <!-- Optional Description -->
        @if(isset($description))
        <div class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300">
            {{ $description }}
        </div>
        @endif
        
        <!-- Close Button -->
        <button class="absolute top-0 right-0 p-2 focus:outline-none" onclick="closePopup()">
            <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

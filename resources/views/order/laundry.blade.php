<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        h1 {
            font-size: 1.5rem; /* Base font size */
            margin-left: 3rem; /* Base margin */
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 1rem; /* Adjust font size for smaller screens */
                margin-left: 1.5rem; /* Adjust margin for smaller screens */
            }
        }

        main {
            min-height: calc(100vh - 3.5rem); /* Adjust for header height */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center align items vertically */
            align-items: center; /* Center align items horizontally */
        }

        .primary-button {
            width: 90%; /* Set button width to 90% of the viewport width */
            max-width: 20rem; /* Limit button width to 20rem */
        }
    </style>
    <x-slot name="header">
        <h1 class="text-black">Make an Order</h1>
    </x-slot>

    <x-primary-button class="primary-button">{{ __('Next') }}</x-primary-button>

</x-app-layout>

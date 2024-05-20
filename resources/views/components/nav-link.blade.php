@props(['active', 'iconSrc'])

@php
$classes = ($active ?? false)
            ? 'inline-flex flex-col items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-blue-500 dark:text-blue-500 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex flex-col items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black dark:text-black hover:text-white dark:hover:text-white hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-blue-500 dark:focus:text-blue-500 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';

$iconClasses = ($active ?? false)
            ? 'nav-icon bg-sky-200 rounded-lg'
            : 'nav-icon';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <div class="nav-item">
        <img src="{{ $iconSrc }}" alt="Icon" class="nav-icon {{ $iconClasses }}">
        <span class="nav-label">{{ $slot }}</span>
    </div>
</a>

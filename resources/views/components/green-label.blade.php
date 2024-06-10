@props([])

<label  {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-green-500 dark:text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-pull flex items-center justify-center border mb-2']) !!}>
    {{  $slot }}
</label>

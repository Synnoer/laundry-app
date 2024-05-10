@props(['for', 'value'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'block font-medium text-sm text-black dark:text-black']) }}>
    {{ $value ?? $slot }}
</label>

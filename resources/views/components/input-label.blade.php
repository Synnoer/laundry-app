@props(['for', 'value'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'block font-medium text-sm text-white dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>

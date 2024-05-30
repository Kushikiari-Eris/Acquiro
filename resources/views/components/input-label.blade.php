@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-900 text-xs font-semibold px-1']) }}>
    {{ $value ?? $slot }}
</label>

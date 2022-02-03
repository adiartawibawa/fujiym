@props(['active'])

@php
$classes =
    $active ?? false
        ? 'bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70 flex cursor-pointer py-2 text-gray-100 hover:bg-gray-700 dark:hover:bg-gray-700' //active
        : 'flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700'; // not active
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

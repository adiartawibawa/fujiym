@props(['active'])

@php
$classes = $active ?? false ? 'bg-gradient-to-r from-fuchsia-800 to-rose-500 dark:bg-gray-700 dark:bg-opacity-70 flex cursor-pointer py-2 hover:from-fuchsia-800 hover:to-rose-500 dark:hover:bg-gray-700 items-center' : 'bg-gradient-to-r dark:bg-gray-700 dark:bg-opacity-70 flex cursor-pointer py-2 hover:from-fuchsia-800 hover:to-rose-500 dark:hover:bg-gray-700 items-center';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span class="inline-flex justify-center items-center w-12 h-6 flex-none">
        {{ $icon }}
    </span>
    {{ $slot }}
</a>

@props(['active'])

@php
$classes = $active ?? false ? 'flex items-center grow-0 shrink-0 relative text-rose-500 dark:text-rose-500 py-2 px-3' : 'flex items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 px-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

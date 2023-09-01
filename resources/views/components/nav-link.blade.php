@props(['active'])

@php
$classes = ($active ?? false)
    ? 'bg-white inline-flex w-full text-gray-900 items-center text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out'
    : 'inline-flex items-center text-gray-400 text-sm font-medium leading-5 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
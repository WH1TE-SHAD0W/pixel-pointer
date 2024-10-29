@props(['size' => 'base'])

@php
    $classes = "bg-white/25 rounded-xl transition-colors duration-300";
    if ($size === 'base') {
        $classes .= "px-5 py-1 text-sm";
    }

    elseif ($size === 'small') {
        $classes .= "px-3 py-1 text-2xs";
    }

@endphp
<a href="a" class="{{ $classes }}">{{ $slot }}</a>


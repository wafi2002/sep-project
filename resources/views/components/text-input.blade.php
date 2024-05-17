@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-black-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-10 px-3']) !!}>

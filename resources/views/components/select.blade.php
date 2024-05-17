<!-- resources/views/components/select.blade.php -->

@props(['disabled' => false])

<select {{ $attributes->merge(['class' => 'border-black-700 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-10 px-3']) }}>
    {{ $slot }}
</select>

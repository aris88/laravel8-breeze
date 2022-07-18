@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 rounded-xl focus:ring focus:ring-red-200 focus:border-red-600 transition duration-200']) !!}>

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'focus:invalid:text-red
      focus:invalid:border-red focus:invalid:ring-red text-sm p-3  rounded-lg focus:outline-none focus:border-flame',
]) !!}>

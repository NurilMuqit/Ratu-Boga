@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'focus:invalid:text-red border-metalicSilver
      focus:invalid:border-red focus:invalid:ring-red font-bold pl-0 bg-almond border-l-0 border-b-2 border-r-0 border-t-0 focus:border-t-0 focus:border-b-2 focus:border-junggleGreen focus:ring-0',
]) !!}>

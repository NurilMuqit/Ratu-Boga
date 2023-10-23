@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-warnahuruf']) }}>
    {{ $value ?? $slot }}
</label>

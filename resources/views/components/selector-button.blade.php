@props(['value'])

<button {{ $attributes->merge(['type' => 'button', 'class' => 'dropdown-item btn-light']) }}>
    {{$value ?? $slot }}
</button>

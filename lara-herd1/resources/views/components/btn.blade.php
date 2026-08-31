{{-- <button {{ $attributes }}>
    {{ $slot }}
</button> --}}
@props([
    'href' => null,
])
@if ($hres)
    <a {{ $attributes->merge([
        'class' => 'btn',
        'href' => $href,
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'class' => 'btn',
        'type' => 'button',
    ]) }}>
        {{ $slot }}
    </button>
@endif

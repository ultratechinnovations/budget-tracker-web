@props([
    'route' => null,
    'label' => 'Click me',
    'icon' => null
])
@isset($route)
    <a href="{{ $route }}"
        class="inline-flex items-center justify-center gap-1 rounded-lg border border-rose-700 bg-rose-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-rose-600 hover:bg-rose-600 hover:text-white focus:ring focus:ring-rose-400/50 active:border-rose-700 active:bg-rose-700">
        @if($icon)
            <i class="ri-{{ $icon }} align-center items-center font-light"></i>
        @endif
        <span>{{ $label }}</span>
    </a>
@else   
    <button {{ $attributes->merge(['class'=>'inline-flex items-center justify-center gap-1 rounded-lg border border-rose-700 bg-rose-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-rose-600 hover:bg-rose-600 hover:text-white focus:ring focus:ring-rose-400/50 active:border-rose-700 active:bg-rose-700'])}}>
        @if($icon)
            <i class="ri-{{ $icon }} align-center items-center font-light"></i>
        @endif
        {{ $label }}
    </button>
@endisset


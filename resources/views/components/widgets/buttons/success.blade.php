@props([
    'route' => null,
    'label' => 'Click me',
    'icon' => null
])
@isset($route)
    <a href="{{ $route }}"
        class="inline-flex items-center justify-center gap-1 rounded-lg border border-green-700 bg-green-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-green-600 hover:bg-green-600 hover:text-white focus:ring focus:ring-green-400/50 active:border-green-700 active:bg-green-700">
        @if($icon)
            <i class="ri-{{ $icon }} align-center items-center font-light"></i>
        @endif
        <span>{{ $label }}</span>
    </a>
@else 
    <button {{ $attributes->merge(['class'=>'inline-flex items-center justify-center gap-1 rounded-lg border border-green-700 bg-green-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-green-600 hover:bg-green-600 hover:text-white focus:ring focus:ring-green-400/50 active:border-green-700 active:bg-green-700'])}}>
        @if($icon)
            <i class="ri-{{ $icon }} align-center items-center font-light"></i>
        @endif
        {{ $label }}
    </button>   
@endisset


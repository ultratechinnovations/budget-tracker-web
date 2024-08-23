@props([
    'route' => null,
    'label' => 'Click me',
    'icon' => null
])
@isset($route)
    <a href="{{ $route }}"
        class="inline-flex items-center justify-center gap-1 rounded-lg border border-violet-700 bg-violet-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-violet-600 hover:bg-violet-600 hover:text-white focus:ring focus:ring-violet-400/50 active:border-violet-700 active:bg-violet-700">
        @if($icon)
            <i class="ri-{{ $icon }} align-center items-center font-light"></i>
        @endif
        <span>{{ $label }}</span>
    </a>
@else 
    <button {{ $attributes->merge(['class'=>'inline-flex items-center justify-center gap-1 rounded-lg border border-violet-700 bg-violet-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-violet-600 hover:bg-violet-600 hover:text-white focus:ring focus:ring-violet-400/50 active:border-violet-700 active:bg-violet-700'])}}>
        @if($icon)
            <i class="ri-{{ $icon }} align-center items-center font-light"></i>
        @endif
        {{ $label }}
    </button>   
@endisset


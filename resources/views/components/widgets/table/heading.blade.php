@props([
    'sortable' => false,
    'direction' => null,
])
<th
    {{ $attributes->merge(['class' => 'min-w-[180px] py-3 pe-3 text-start text-sm font-semibold uppercase tracking-wider text-slate-700']) }}
        @unless($sortable)
           {{ $slot }}
        @else
            <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider hover:text-gray-900">
                <span>{{ $slot }}</span>
                <span>
                    @if($direction === 'asc')
                        <i class="ri-arrow-up-s-line"></i>
                    @elseif($direction === 'desc')
                        <i class="ri-arrow-down-s-line"></i>
                    @endif
                </span>
            </button>
        @endunless

</th>
@props([
    'label' => 'Menu',
    'route' => null,
    'active' => null,
])
<a wire:navigate href="{{ $route }}"
    class="group flex items-center gap-2 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-violet-50 hover:text-violet-600 active:border-violet-100 {{ request()->routeIs($active) ? 'bg-violet-50 text-violet-600 border-violet-100' : '' }}">
    <span>{{ $label }}</span>
</a>

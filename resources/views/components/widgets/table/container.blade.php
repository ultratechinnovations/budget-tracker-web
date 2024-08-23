@props([
    'headers' => [],
    'rows' => null
])
<div class="relative soft-scrollbar dark:ring-dark-600 overflow-auto rounded-lg shadow ring-1 ring-gray-300">
    <svg class="text-primary-500 dark:text-dark-300 absolute bottom-0 left-0 right-0 top-0 m-auto grid h-10 w-10 animate-spin place-items-center" wire:loading="quantity,search" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
    <table class="dark:divide-dark-500/50 min-w-full divide-y divide-gray-200" wire:loading.class="cursor-not-allowed select-none opacity-25">
        <thead>
            <tr class="border-b-2 border-slate-100">
                {{ $head }}
            </tr>
        </thead>
        <tbody class="dark:bg-dark-700 dark:divide-dark-500/20 divide-y divide-gray-200 bg-white">
            {{ $body }}
        </tbody>
    </table>
</div>
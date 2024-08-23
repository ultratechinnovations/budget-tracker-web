@props([
    'label' => null,
    'placeholder' => null,
    'type' => 'text',
    'model' => null,
])
<div class="col-span-2">
    @isset($label)
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    @endisset
    <textarea wire:model="{{ $model }}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $placeholder }}"></textarea>                    
</div>
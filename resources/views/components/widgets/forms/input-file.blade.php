@props([
    'label' => null,
    'placeholder' => null,
    'hint' => null
])
<div class="col-span-2">
    @if ($label)
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">{{ $label }}</label>
    @endif
    
    <input {{ $attributes->merge(['class'=>'block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400']) }}
        aria-describedby="user_avatar_help" type="file">
    @if ($hint)
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">{{ $hint }}</div>
    @endif
    
</div>

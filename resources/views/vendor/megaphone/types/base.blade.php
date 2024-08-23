<div tabindex="0" aria-label="group icon" role="img" class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
    {!! $icon ?? '' !!}
</div>
<div class="pl-3 w-full">
    <div class="items-center justify-between w-full pr-2">
        <p class="block w-full focus:outline-none text-sm leading-none my-0">
            <span class="text-sm font-semibold text-gray-900 dark:text-white">
                @if(! empty($announcement['link']))
                    <a href="{{ $announcement['link'] }}">
                @endif
                        {{ $announcement['title'] }}
                        @if(! empty($announcement['link']))
                    </a>
                @endif
            </span>
        </p>
        <p class="text-sm font-normal">
            {{ $announcement['body'] }}
        </p>
    </div>
    <div class="flex justify-between">
        <p class="text-xs font-medium text-blue-600 dark:text-blue-500" title="{{ $created_at->format('jS M Y H:i') }}">
            {{ $created_at->diffForHumans() }}
        </p>

        @if(! empty($announcement['link']))
            <p class="text-right focus:outline-none text-xs leading-3 pt-1">
                <a href="{{ $announcement['link'] }}"
                   {{ ! empty($announcement['linkNewWindow']) ? ' target="_blank"' : '' }}
                   class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    {{ ! empty($announcement['linkText']) ? $announcement['linkText'] : 'View' }}
                </a>
            </p>
        @endif
    </div>
</div>

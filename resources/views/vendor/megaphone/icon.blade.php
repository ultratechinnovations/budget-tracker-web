<button type="button"
        aria-label="show notifications"
        class=""
        @click="open = true"
>
    <span class="sr-only">Show Notifications</span>
    <svg class="hi-outline hi-bell-alert inline-block h-5 w-5"
         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
    </svg>
    @if ($unread->count() > 0)
        @if($showCount)
            <span x-on:refresh-notification.window aria-label="unread count" class="absolute top-0 left-1/2 aspect-square max-h-fit rounded-full border-2 bg-red-500 px-1.5 shadow leading-5 text-white font-semibold text-xs">
                {{ $unread->count() }}
            </span>
        @else
            <span aria-label="has unread notifications" class="absolute top-0 left-0 aspect-square h-2/5 rounded-full bg-red-500 shadow">
        @endif
    @endif
</button>

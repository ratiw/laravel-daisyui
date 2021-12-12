<div class="px-4 py-5 sm:px-6">
    <div class="flex space-x-3 items-center">
        @isset($avatar)
        <div class="flex-shrink-0">
            {{ $avatar }}
        </div>
        @endisset
        <div class="min-w-0 flex-1">
            <p class="text-lg leading-6 font-medium text-gray-900">
                {{ $slot }}
            </p>
            @isset($meta)
            <p class="text-sm text-gray-500">
                {{ $meta ?? '' }}
            </p>
            @endisset
        </div>
        <div {{ $buttons->attributes->class(['flex-shrink-0 flex']) }}>
            {{ $buttons ?? '' }}
            @isset($dropdown)
            <div class="relative z-30 inline-block text-left">
                <div>
                    <button type="button"
                        class="ml-2 p-2 -mr-2 md:-mr-4 rounded-full flex items-center text-gray-400 hover:text-gray-600"
                        id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>

                {{  $dropdown ?? '' }}
            </div>
            @endisset
        </div>
    </div>
</div>

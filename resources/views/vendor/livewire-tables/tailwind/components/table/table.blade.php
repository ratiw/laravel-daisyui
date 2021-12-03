@props(['customSecondaryHeader' => false, 'useHeaderAsFooter' => false, 'customFooter' => false])

<div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden rounded-none md:rounded-lg">
    <table {{ $attributes->except(['wire:sortable', 'class']) }} class="{{ trim($attributes->get('class')) ?: 'table w-full table-zebra'}}">
        <thead>
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody {{ $attributes->only('wire:sortable') }} class="bg-white divide-y divide-gray-200 dark:divide-none">
            @if ($customSecondaryHeader)
                {{ $customSecondaryHead }}
            @endif

            {{ $body }}
        </tbody>

        @if ($useHeaderAsFooter || $customFooter)
            <tfoot>
                @if ($useHeaderAsFooter)
                    <tr>
                        {{ $head }}
                    </tr>
                @elseif($customFooter)
                    {{ $foot }}
                @endif
            </tfoot>
        @endif
    </table>
</div>
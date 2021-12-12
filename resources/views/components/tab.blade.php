@props([
    'tabs' => [],
    'active' => 'border-pink-500 text-gray-900',
])
<div x-data="{ tab: 0 }">
    <div class="mt-6 sm:mt-2 2xl:mt-5">
        <div class="border-b border-gray-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    @foreach ($tabs as $idx => $tab)
                        <a href="#"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page"
                            x-bind:class="{'{{ $active }}': tab === {{ $idx }}, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== {{ $idx }}}"
                            x-on:click="tab = {{ $idx }}">
                            {{ $tab }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    {{ $slot }}
</div>

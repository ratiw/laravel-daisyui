<x-tablet-layout>
    <x-slot name="title">Main Menu</x-slot>
    <article>
        <!-- Tabs -->
        <x-tab :tabs="['Profile', 'Calendar', 'Recognition!']">
            <!-- Description list -->
            @include('layouts._description_list')
            <div x-show="tab === 1" class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                Calender content here!

            </div>
            <div x-show="tab === 2" class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                Recognition content here!
            </div>
        </x-tab>

    </article>
    {{-- @include('layouts._directory') --}}
</x-tablet-layout>

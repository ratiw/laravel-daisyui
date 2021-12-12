<x-tablet-layout>
    <x-slot name="title">Sales</x-slot>
    <div class="my-3">
        <div class="space-y-4">
            <div class="block">
                @include('sales._header')
            </div>
            <div class="block md:flex space-y-4 md:space-y-0">
                <div class="w-full md:w-2/3 lg:w-3/4 md:pr-4 sm:pr-6">
                    @include('sales._items')
                </div>
                <div class="md:w-96 overflow-y-auto lg:block">
                    @include('sales._total')
                </div>
            </div>
        </div>
    </div>
</x-tablet-layout>

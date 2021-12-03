@php
$labelClass = "block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2";
$fieldClass = "sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5";
@endphp
<x-jet-dialog-modal wire:model="editModal">
    <x-slot name="title">
        @lang('User') : {{ optional($this->model)->name }}
    </x-slot>

    <x-slot name="content">
        <form class="space-y-8 divide-y divide-gray-200">
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <x-form-section class="pt-4">
                    <x-slot name="title">Personal Information</x-slot>
                    <x-slot name="description">Use a permanent address where you can receive mail.</x-slot>
                    <x-form-section.content>
                        <div class="{{ $fieldClass }}">
                            <label for="first-name" class="{{ $labelClass }}">
                                First name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="{{ $fieldClass }}">
                            <label for="last-name" class="{{ $labelClass }}">
                                Last name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="{{ $fieldClass }}">
                            <label for="email" class="{{ $labelClass }}">
                                E-mail address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input id="email" name="email" type="email" autocomplete="email"
                                    class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="{{ $fieldClass }}">
                            <label for="country" class="{{ $labelClass }}">
                                Country / Region
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select id="country" name="country" autocomplete="country"
                                    class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>
                        <div class="{{ $fieldClass }}">
                            <label for="email" class="{{ $labelClass }}">
                                By Email
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg space-y-4">
                                    <div class="relative flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="font-medium text-gray-700">Comments</label>
                                            <p class="text-gray-500">Get notified when someones posts a comment on a
                                                posting.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="relative flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="candidates" name="candidates" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="candidates"
                                                    class="font-medium text-gray-700">Candidates</label>
                                                <p class="text-gray-500">Get notified when a candidate applies for a
                                                    job.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="relative flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="offers" name="offers" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="offers" class="font-medium text-gray-700">Offers</label>
                                                <p class="text-gray-500">Get notified when a candidate accepts or
                                                    rejects an offer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="{{ $fieldClass }}">
                            <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                id="label-notifications">
                                Push Notifications
                            </div>
                            <div class="sm:col-span-2">
                                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.
                                </p>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input id="push-everything" name="push-notifications" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-everything"
                                            class="ml-3 block text-sm font-medium text-gray-700">
                                            Everything
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="push-email" name="push-notifications" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                                            Same as email
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="push-nothing" name="push-notifications" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">
                                            No push notifications
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-form-section.content>
                </x-form-section>
            </div>
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="resetModal" wire:loading.attr="disabled">
            @lang('Done')
        </x-jet-secondary-button>
        <x-jet-button
            class="text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save</x-jet-button>
    </x-slot>
</x-jet-dialog-modal>

<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @googlefonts
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="h-full overflow-hidden font-sans antialiased">
    <x-jet-banner />

    <!-- App -->
    <div x-data="{ openMobileSidebar: false }" x-on:keydown.window.escape="openMobileSidebar = false" class="h-full flex">

        <!-- Off-canvas menu (for mobile)-->
        @include('layouts._sidebar_mobile')


        <!-- Static sidebar for desktop -->
        @include('layouts._sidebar_desktop')

        <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
            <!-- Top nav with logo and hamburger button -->
            <div class="xl:hidden">
                <div class="flex items-center justify-between bg-gray-50 border-b border-gray-200 px-4 py-1.5">
                    <div class="flex items-center justify-start">
                        <img class="h-8 w-auto mr-3" src="https://tailwindui.com/img/logos/workflow-mark-pink-500.svg"
                            alt="Workflow">
                        <h1 class="mt-2 text-2xl font-bold leading-7 text-gray-800 sm:text-3xl sm:truncate">
                            {{ $title }}
                        </h1>
                    </div>
                    <div>
                        <button type="button"
                            class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-600"
                            x-on:click="openMobileSidebar = true">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- main wrapper -->
            <div class="flex-1 relative z-0 flex overflow-hidden">
                <!-- main section -->
                <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last bg-gray-100">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    @stack('scripts')
</body>

</html>

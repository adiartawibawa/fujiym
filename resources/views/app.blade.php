<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{currentTheme: localStorage.getItem('theme') || localStorage.setItem('theme', 'system')}"
    x-init="$watch('currentTheme', val => localStorage.setItem('theme', val))"
    x-bind:class="{'dark': currentTheme === 'dark' || (currentTheme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="bg-coolGray-100 dark:bg-gray-800 dark:text-gray-100">

    <div id="app" class="flex flex-col h-screen justify-between">

        @include('layouts.components.topnav')

        @include('layouts.components.sidebar')

        @include('layouts.components.sub-topnav')

        <main class="py-6 px-0 md:px-6">
            {{-- content goes here --}}
        </main>

        @include('layouts.components.footer')
    </div>

    @stack('modals')

    @livewireScripts

</body>

</html>

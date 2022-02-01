<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="sidebar ? '' : 'aside-compact'">

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

<body class="font-sans antialiased">

    <div id="app" class="flex flex-col h-screen justify-between" x-data="{open:false}">

        @include('layouts.components.topnav')

        @include('layouts.components.sidebar')

        @include('layouts.components.page-title')

        {{-- main content --}}
        <main class="py-6 px-0 mb-auto md:px-6">
            {{-- Content Goes Here --}}
            {{-- <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mb-6">
                <div
                    class="md:rounded flex flex-row bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900 items-center shadow">
                    <!---->
                    <div class="p-6 flex-1">
                        <div class="justify-around lg:justify-center items-center block md:flex">
                            <div class="flex shrink items-center justify-center mb-6 md:mb-0">
                                <div class="relative lg:mx-12"><img
                                        src="https://avatars.dicebear.com/api/avataaars/example.svg?options[top][]=shortHair&amp;options[accessoriesChance]=93"
                                        alt="John Doe"
                                        class="rounded-full block h-auto w-full max-w-full bg-gray-100 dark:bg-gray-800">
                                    <div class="absolute right-0 bottom-0">
                                        <div class="flex items-stretch justify-start relative"><label
                                                class="inline-flex"><a
                                                    class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-blue-600 text-white border-blue-700 hover:bg-blue-700 p-1 focus:ring rounded-full w-12 h-12"
                                                    disabled="false">
                                                    <!---->
                                                    <!---->
                                                    <!----><span class="inline-flex justify-center items-center"><svg
                                                            viewBox="0 0 24 24" width="24" height="24"
                                                            class="inline-block">
                                                            <path fill="currentColor"
                                                                d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z">
                                                            </path>
                                                        </svg>
                                                        <!---->
                                                    </span>
                                                    <!---->
                                                </a><input type="file"
                                                    class="absolute top-0 left-0 w-full h-full opacity-0 outline-none cursor-pointer -z-1"></label>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex shrink items-center justify-center">
                                <div class="space-y-3 text-center md:text-left lg:mx-12">
                                    <h1 class="text-2xl"> Howdy, <b>John Doe</b>! </h1>
                                    <p>Last login <b>12 mins ago</b> from <b>127.0.0.1</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>

            </div> --}}
        </main>

        @include('layouts.components.footer')

        <div class="flex items-center flex-col justify-center overflow-hidden fixed inset-0 z-40" style="display: none;">
            <div class="absolute inset-0 bg-gradient-to-tr from-gray-700 via-gray-900 to-gray-700 opacity-90"></div>
        </div>

        <div class="fixed inset-0 flex flex-col-reverse p-9 overflow-hidden z-100 pointer-events-none"></div>

    </div>

    @livewireScripts
</body>

</html>

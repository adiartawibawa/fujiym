{{-- Top Navigation --}}
<nav id="nav"
    class="top-0 left-0 right-0 fixed flex bg-white h-14 border-b border-gray-100 z-30 w-screen transition-position lg:w-auto lg:items-stretch dark:bg-gray-900 dark:border-gray-800 shadow">
    {{-- responsive navbar --}}
    <div class="flex-1 items-stretch flex h-14">
        <div
            class="flex lg:hidden items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 pl-3 pr-0">
            <span class="inline-flex justify-center items-center w-6 h-6">
                <svg viewBox="0 0 24 24" width="24" height="24" class="inline-block">
                    <path fill="currentColor"
                        d="M19,13H3V11H19L15,7L16.4,5.6L22.8,12L16.4,18.4L15,17L19,13M3,6H13V8H3V6M13,16V18H3V16H13Z">
                    </path>
                </svg>
                <!---->
            </span>
        </div>
    </div>

    {{-- responsive navbar --}}
    <div class="flex-none items-stretch flex h-14 lg:hidden">
        <div
            class="flex items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 px-3">
            <span class="inline-flex justify-center items-center w-6 h-6 relative">
                <svg viewBox="0 0 24 24" width="20" height="20" class="inline-block">
                    <path fill="currentColor"
                        d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21">
                    </path>
                </svg>
                <div class="w-2.5 h-2.5 rounded-full absolute top-0 right-0 bg-yellow-600 text-white border-yellow-700">
                </div>
            </span>
        </div>
        <div
            class="flex items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 px-3">
            <span class="inline-flex justify-center items-center w-6 h-6">
                <svg viewBox="0 0 24 24" width="20" height="20" class="inline-block">
                    <path fill="currentColor"
                        d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z">
                    </path>
                </svg>
                <!---->
            </span>
        </div>
    </div>

    <div
        class="absolute w-screen top-14 left-0 bg-white shadow lg:w-auto lg:items-stretch lg:flex lg:grow lg:static lg:border-b-0 lg:overflow-visible lg:shadow-none dark:bg-gray-900 hidden">
        <div
            class="max-h-screen-menu overflow-y-auto lg:overflow-visible lg:flex lg:items-stretch lg:justify-end lg:ml-auto">

            {{-- Notif --}}
            <div
                class="flex items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 px-3 lg:border-r lg:border-gray-100 lg:dark:border-gray-800 lg:w-16 lg:justify-center">
                <span class="inline-flex justify-center items-center w-6 h-6 relative transition-colors">
                    <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                        <path fill="currentColor"
                            d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21">
                        </path>
                    </svg>
                    {{-- <div
                        class="w-2.5 h-2.5 rounded-full absolute top-0 right-0 bg-yellow-600 text-white border-yellow-700">
                    </div> --}}
                </span>
                <span class="px-2 transition-colors lg:hidden">Updates</span>
            </div>

            {{-- About --}}
            <a class="flex items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 px-3 lg:border-r lg:border-gray-100 lg:dark:border-gray-800 lg:w-16 lg:justify-center"
                href="#">
                <span class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                    <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                        <path fill="currentColor"
                            d="M11,18H13V16H11V18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,6A4,4 0 0,0 8,10H10A2,2 0 0,1 12,8A2,2 0 0,1 14,10C14,12 11,11.75 11,15H13C13,12.75 16,12.5 16,10A4,4 0 0,0 12,6Z">
                        </path>
                    </svg>
                    <!---->
                </span>
                <span class="px-2 transition-colors lg:hidden">About</span>
            </a>

            {{-- user logged in --}}
            <div x-data="{ open: false }"
                class="block items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white lg:flex p-0 lg:py-2 lg:px-3 lg:border-r lg:border-gray-100 lg:dark:border-gray-800 dropdown">
                {{-- Current User --}}
                <a @click="open = ! open "
                    class="flex items-center py-2 px-3 bg-gray-100 dark:bg-gray-800 lg:bg-transparent lg:dark:bg-transparent">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="w-6 h-6 mr-3 inline-flex">
                            <img src="{{ Auth::user()->profile_photo_url }}
                            alt=" {{ Auth::user()->name }}"
                                class="rounded-full block h-auto w-full max-w-full bg-gray-100 dark:bg-gray-800">
                            <!---->
                        </div>
                    @endif
                    <div>
                        <span>{{ Auth::user()->name }}</span>
                    </div>
                    <span class="inline-flex justify-center items-center w-6 h-6 hidden lg:inline-flex">
                        <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                            <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z">
                            </path>
                        </svg>
                        <!---->
                    </span>
                </a>
                {{-- user menu --}}
                <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.400ms
                    x-transition:enter="transition ease-out duration-300" x-transition:enter.scale.80
                    x-transition:leave.scale.90 x-transition:leave="transition ease-in duration-300"
                    x-transition:leave="transition ease-in duration-300"
                    class="text-sm border-gray-100 border-b lg:border-b-0 lg:border-gray-200 lg:border-t lg:bg-white lg:absolute lg:top-full lg:left-0 lg:min-w-full lg:z-20 lg:shadow-md lg:rounded-b lg:dark:bg-gray-800 dark:border-gray-700">

                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                        :active="request()->routeIs('profile.show')" @click.away="open = false">
                        <span class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z">
                                </path>
                            </svg>
                            <!---->
                        </span>
                        <span class="px-2 transition-colors">{{ __('My Profile') }}</span>
                    </x-jet-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                            :active="request()->routeIs('api-tokens.index')">
                            <span class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                </svg>
                            </span>
                            <span class="px-2 transition-colors">{{ __('API Tokens') }}</span>
                        </x-jet-responsive-nav-link>
                    @endif

                    <x-jet-responsive-nav-link href="#" @click.away="open = false">
                        <span class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z">
                                </path>
                            </svg>
                            <!---->
                        </span>
                        <span class="px-2 transition-colors">{{ __('Settings') }}</span>
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="#" @click.away="open = false">
                        <span class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z">
                                </path>
                            </svg>
                            <!---->
                        </span>
                        <span class="px-2 transition-colors">{{ __('Messages') }}</span>
                    </x-jet-responsive-nav-link>

                    <hr class="hidden lg:block lg:my-2 border-t border-gray-100 dark:border-gray-700">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();"
                            class="flex items-center grow-0 shrink-0 relative hover:text-rose-500 cursor-pointer hover:text-rose-500 text-black dark:text-white py-2 px-3">
                            <span class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                                <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                    <path fill="currentColor"
                                        d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z">
                                    </path>
                                </svg>
                                <!---->
                            </span>
                            <span @click.away="open = false" class="px-2 transition-colors">Log Out</span>
                        </a>
                    </form>
                </div>
            </div>

            {{-- switcher dark/light mode --}}
            <div x-cloak
                class="flex items-center grow-0 shrink-0 relative  cursor-pointer text-black dark:text-white py-2 px-3 lg:border-r lg:border-gray-100 lg:dark:border-gray-800 lg:w-16 lg:justify-center">
                {{-- moon --}}
                <span x-show="currentTheme === 'dark'" x-on:click="currentTheme = 'system'"
                    class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </span>
                <span x-show="currentTheme === 'light'" x-on:click="currentTheme = 'dark'"
                    class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                    {{-- sun --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
                <span x-show="currentTheme === 'system'"
                    x-on:click="window.matchMedia('(prefers-color-scheme: dark)').matches ? currentTheme = 'light' : currentTheme = 'dark'"
                    class="inline-flex justify-center items-center w-6 h-6 transition-colors">
                    {{-- cogs --}}
                    <svg x-show="! window.matchMedia('(prefers-color-scheme: dark)').matches"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <svg x-show="window.matchMedia('(prefers-color-scheme: dark)').matches"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
            </div>

        </div>
    </div>
</nav>

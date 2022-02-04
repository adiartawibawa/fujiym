<aside id="aside"
    class="flex flex-col w-60 h-screen top-0 fixed bg-gray-800 transition-position dark:bg-gray-900 overflow-auto dark:shadow-r-gray-800 z-50 -left-60 lg:left-0">
    <div class="flex flex-row w-full bg-gray-900 text-white shrink-0 h-14 items-center">
        <!---->
        <div class="flex-1 px-3 uppercase text-center">
            <span class="font-bold">{{ config('app.name') }}</span>
        </div>
    </div>
    <div class="flex-1">
        <p class="p-3 text-xs uppercase text-gray-400">General</p>

        <x-menu-sidebar href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <span class="inline-flex justify-center items-center w-12 h-6 flex-none">
                <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                    <path fill="currentColor"
                        d="M21,14H3V4H21M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10L8,21V22H16V21L14,18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2Z">
                    </path>
                </svg>
                <!---->
            </span>
            <span class="grow">{{ __('Dashboard') }}</span>
        </x-menu-sidebar>

        <p class="p-3 text-xs uppercase text-gray-400">Administrator</p>

        <x-menu-sidebar href="#">
            <span class="inline-flex justify-center items-center w-12 h-6 flex-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <!---->
            </span>
            <span class="grow">{{ __('Users') }}</span>
        </x-menu-sidebar>

        <x-menu-sidebar href="{{ route('roles.index') }}" :active="request()->routeIs('roles.*')">
            <span class="inline-flex justify-center items-center w-12 h-6 flex-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
                <!---->
            </span>
            <span class="grow">{{ __('Roles & Permissions') }}</span>
        </x-menu-sidebar>
        {{-- <p class="p-3 text-xs uppercase text-gray-400">Examples</p>
        <ul>
            <li>
                <a class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 relative flex-none">
                        <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M5,4H19A2,2 0 0,1 21,6V18A2,2 0 0,1 19,20H5A2,2 0 0,1 3,18V6A2,2 0 0,1 5,4M5,8V12H11V8H5M13,8V12H19V8H13M5,14V18H11V14H5M13,14V18H19V14H13Z">
                            </path>
                        </svg>
                        <div
                            class="w-2.5 h-2.5 rounded-full absolute top-0 right-2 bg-yellow-600 text-white border-yellow-700">
                        </div>
                    </span>
                    <span class="grow">Tables &amp; Lists</span>
                    <!---->
                </a>
                <!---->
            </li>
            <li><a class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M5,3C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19H5V5H12V3H5M17.78,4C17.61,4 17.43,4.07 17.3,4.2L16.08,5.41L18.58,7.91L19.8,6.7C20.06,6.44 20.06,6 19.8,5.75L18.25,4.2C18.12,4.07 17.95,4 17.78,4M15.37,6.12L8,13.5V16H10.5L17.87,8.62L15.37,6.12Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Forms</span>
                    <!---->
                </a>
                <!---->
            </li>
            <li><a class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M21,17V5H3V17H21M21,3A2,2 0 0,1 23,5V17A2,2 0 0,1 21,19H16V21H8V19H3A2,2 0 0,1 1,17V5A2,2 0 0,1 3,3H21M5,7H11V11H5V7M5,13H11V15H5V13M13,7H19V9H13V7M13,11H19V15H13V11Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">UI</span>
                    <!---->
                </a>
                <!---->
            </li>
            <li><a exact-active-class="bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70"
                    class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M7.5,2C5.71,3.15 4.5,5.18 4.5,7.5C4.5,9.82 5.71,11.85 7.53,13C4.46,13 2,10.54 2,7.5A5.5,5.5 0 0,1 7.5,2M19.07,3.5L20.5,4.93L4.93,20.5L3.5,19.07L19.07,3.5M12.89,5.93L11.41,5L9.97,6L10.39,4.3L9,3.24L10.75,3.12L11.33,1.47L12,3.1L13.73,3.13L12.38,4.26L12.89,5.93M9.59,9.54L8.43,8.81L7.31,9.59L7.65,8.27L6.56,7.44L7.92,7.35L8.37,6.06L8.88,7.33L10.24,7.36L9.19,8.23L9.59,9.54M19,13.5A5.5,5.5 0 0,1 13.5,19C12.28,19 11.15,18.6 10.24,17.93L17.93,10.24C18.6,11.15 19,12.28 19,13.5M14.6,20.08L17.37,18.93L17.13,22.28L14.6,20.08M18.93,17.38L20.08,14.61L22.28,17.15L18.93,17.38M20.08,12.42L18.94,9.64L22.28,9.88L20.08,12.42M9.63,18.93L12.4,20.08L9.87,22.27L9.63,18.93Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Dark mode</span>
                    <!---->
                </a>
                <!---->
            </li>
            <li><a class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M2,6H4V18H2V6M5,6H6V18H5V6M7,6H10V18H7V6M11,6H12V18H11V6M14,6H16V18H14V6M17,6H20V18H17V6M21,6H22V18H21V6Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Pricing</span>
                    <!---->
                </a>
                <!---->
            </li>
            <li><a class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Profile</span>
                    <!---->
                </a>
                <!---->
            </li>
            <li><a class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Login</span>
                    <!---->
                </a>
                <!---->
            </li>
        </ul>
        <p class="p-3 text-xs uppercase text-gray-400">Subs</p>
        <ul>
            <li><a exact-active-class="bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70"
                    class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M21,15.61L19.59,17L14.58,12L19.59,7L21,8.39L17.44,12L21,15.61M3,6H16V8H3V6M3,13V11H13V13H3M3,18V16H16V18H3Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Dropdown</span><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"></path>
                        </svg>
                        <!---->
                    </span></a>
                <ul class="hidden">
                    <li><a exact-active-class="bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70"
                            class="flex cursor-pointer p-3 text-sm text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700">
                            <!----><span class="grow">Sub-item One</span>
                            <!---->
                        </a>
                        <!---->
                    </li>
                    <li><a exact-active-class="bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70"
                            class="flex cursor-pointer p-3 text-sm text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700">
                            <!----><span class="grow">Sub-item Two</span>
                            <!---->
                        </a>
                        <!---->
                    </li>
                </ul>
            </li>
            <li><a exact-active-class="bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70"
                    class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M9,5V9H21V5M9,19H21V15H9M9,14H21V10H9M4,9H8V5H4M4,19H8V15H4M4,14H8V10H4V14Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">Submenus</span><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none"><svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z">
                            </path>
                        </svg>
                        <!---->
                    </span></a>
                <!---->
            </li>
        </ul> --}}
        <p class="p-3 text-xs uppercase text-gray-400">About</p>
        <ul>
            <li>
                <x-menu-sidebar href="#">
                    <span class="inline-flex justify-center items-center w-12 h-6 flex-none">
                        <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M15.07,11.25L14.17,12.17C13.45,12.89 13,13.5 13,15H11V14.5C11,13.39 11.45,12.39 12.17,11.67L13.41,10.41C13.78,10.05 14,9.55 14,9C14,7.89 13.1,7 12,7A2,2 0 0,0 10,9H8A4,4 0 0,1 12,5A4,4 0 0,1 16,9C16,9.88 15.64,10.67 15.07,11.25M13,19H11V17H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z">
                            </path>
                        </svg>
                        <!---->
                    </span>
                    <span class="grow">{{ __('About') }}</span>
                </x-menu-sidebar>
                {{-- <a href="https://justboil.me/tailwind-admin-templates/vue-dashboard/"
                    exact-active-class="bg-gray-700 bg-opacity-70 dark:bg-gray-700 dark:bg-opacity-70"
                    class="flex cursor-pointer py-2 text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-700"><span
                        class="inline-flex justify-center items-center w-12 h-6 flex-none">
                        <svg viewBox="0 0 24 24"
                            width="16" height="16" class="inline-block">
                            <path fill="currentColor"
                                d="M15.07,11.25L14.17,12.17C13.45,12.89 13,13.5 13,15H11V14.5C11,13.39 11.45,12.39 12.17,11.67L13.41,10.41C13.78,10.05 14,9.55 14,9C14,7.89 13.1,7 12,7A2,2 0 0,0 10,9H8A4,4 0 0,1 12,5A4,4 0 0,1 16,9C16,9.88 15.64,10.67 15.07,11.25M13,19H11V17H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z">
                            </path>
                        </svg>
                        <!---->
                    </span><span class="grow">About</span>
                    <!---->
                </a> --}}
                <!---->
            </li>
        </ul>
    </div>

</aside>

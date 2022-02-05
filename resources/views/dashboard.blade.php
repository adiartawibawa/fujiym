<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold leading-tight"> {{ __('Dashboard') }} </h1>
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('dashboard') }}
    </x-slot>

    <div class="grid grid-cols-1 gap-6 mb-6">
        <div
            class="md:rounded flex flex-row bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900 items-center">
            <!---->
            <div class="p-6 flex-1">
                <div class="justify-around lg:justify-center items-center block md:flex">
                    <div class="flex shrink items-center justify-center mb-6 md:mb-0">
                        <div class="relative lg:mx-12">
                            <img src="https://avatars.dicebear.com/api/avataaars/example.svg?options[top][]=shortHair&amp;options[accessoriesChance]=93"
                                alt="John Doe"
                                class="rounded-full block h-auto w-full max-w-full bg-gray-100 dark:bg-gray-800">
                            <div class="absolute right-0 bottom-0">
                                <div class="flex items-stretch justify-start relative">
                                    <label class="inline-flex">
                                        <a class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-blue-600 text-white border-blue-700 hover:bg-blue-700 p-1 focus:ring rounded-full w-12 h-12"
                                            disabled="false">
                                            <span class="inline-flex justify-center items-center">
                                                <svg viewBox="0 0 24 24" width="24" height="24" class="inline-block">
                                                    <path fill="currentColor"
                                                        d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <input type="file"
                                            class="absolute top-0 left-0 w-full h-full opacity-0 outline-none cursor-pointer -z-1"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex shrink items-center justify-center">
                        <div class="space-y-3 text-center md:text-left lg:mx-12">
                            <div class="flex justify-center md:block">
                                <div class="flex justify-start flex-wrap -mb-3"><label
                                        class="switch mr-6 mb-3 last:mr-0"><input type="checkbox" name="sample-switch"
                                            value="one"><span class="check"></span><span
                                            class="control-label">Notifications</span></label></div>
                            </div>
                            <h1 class="text-2xl"> Howdy, <b>{{ Auth::user()->name }}</b>! </h1>
                            <p>Last login <b>12 mins ago</b> from <b>127.0.0.1</b></p>
                            <div class="flex justify-center md:block">
                                <div
                                    class="inline-flex items-center border py-2 px-4 rounded-2xl bg-blue-600 text-white border-blue-700 mr-3 last:mr-0">
                                    <span class="inline-flex justify-center items-center w-4 h-4 mr-2"><svg
                                            viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                            <path fill="currentColor"
                                                d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                            </path>
                                        </svg>
                                        <!---->
                                    </span><span>Verified</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>

</x-app-layout>

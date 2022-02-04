<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold leading-tight"> {{ __('Roles & Permissions') }} </h1>
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('role-show', $role) }}
    </x-slot>

    <div class="md:rounded block bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900 mb-6 last:mb-0">
        <div class="xl:flex xl:flex-col xl:col-span-3 mb-6 xl:mb-0">
            <div
                class="md:rounded block bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900 mb-6 last:mb-0">
                <div class="p-6">
                    <div class="justify-between items-center block md:flex">
                        <div class="flex shrink items-center justify-center mb-6 md:mb-0">
                            <div class="justify-start items-center block md:flex">
                                <div class="flex shrink items-center justify-center mb-6 md:mb-0">
                                    <span
                                        class="inline-flex justify-center items-center w-12 h-12 rounded-full text-emerald-600 bg-gray-50 dark:bg-gray-800 md:mr-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72"
                                            class="inline-block" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                        </svg>

                                    </span>
                                </div>
                                <div class="flex shrink items-center justify-center">
                                    <div class="text-center space-y-1 md:text-left md:mr-6 text-sm">
                                        <h4 class="text-3xl font-bold uppercase"> {{ $role->name }}</h4>
                                        <p class="text-gray-500 dark:text-gray-400">
                                            <b>Created </b> {{ $role->created_at_formatted }}
                                        </p>
                                        <p class="text-gray-500 dark:text-gray-400">
                                            <b>Updated </b> {{ $role->updated_at_formatted }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flex shrink items-center justify-center">
                            <div class="text-center md:text-right space-y-1">
                                <p class="font-semibold">Guard</p>
                                <div>
                                    <div
                                        class="inline-flex items-center border py-0.5 px-2 text-xs rounded-lg bg-emerald-600 text-white border-emerald-700 mr-1.5 last:mr-0">
                                        <span>{{ $role->guard_name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

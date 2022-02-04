<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold leading-tight"> {{ __('Roles & Permissions') }} </h1>
    </x-slot>

    <x-slot name="breadcrumbs">
        @if (empty($role))
            {{ Breadcrumbs::render('role-create') }}
        @else
            {{ Breadcrumbs::render('role-show', $role) }}
        @endif
    </x-slot>

    @if (empty($role))
        <form method="POST" action="{{ route('roles.store') }}">
        @else
            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                <input type="hidden" name="id" value="{{ $role->id }}" />
                @method('PUT')
    @endif
    @csrf
    <div class="grid grid-cols-1 xl:grid-cols-4 xl:gap-6 xl:mb-0">
        <div class="md:rounded flex flex-col bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900">
            <div class="md:rounded flex flex-col bg-white dark:bg-gray-900 dark:border-gray-900">
                <header class="flex items-stretch border-b border-gray-100 dark:border-gray-700">
                    <p class="flex items-center py-3 grow font-bold px-4">
                        <span class="inline-flex justify-center items-center w-6 h-6 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </span> {{ empty($role) ? __('New Role') : __('Update Role') }}
                    </p>
                </header>
                <div class="p-6 flex-1">
                    <div class="flex justify-between items-center">
                        <div class="space-y-3">
                            <x-jet-label class="text-sm text-gray-700 tracking-wide" for="email"
                                value="{{ __('Role Name') }}" />
                            <input id="name" type="text" name="name"
                                class="w-full text-lg py-2 border-b focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-200 border-gray-300 focus:outline-none focus:border-rose-500 @error('name') is-invalid @enderror @if (!$errors->has('name') && old('name')) is-valid @endif"
                                value="{{ old('name', !empty($role) ? $role->name : null) }}"
                                {{ $disabled ?? 'false' }} require autofocus />
                            @error('name')
                                <div class="  invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="border-gray-100 dark:border-gray-700 p-6 border-t">
                    <div class="flex items-center justify-start flex-wrap -mb-3">
                        <button
                            class="w-full inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-blue-600 text-white border-blue-700 hover:bg-blue-700 py-2 px-3 focus:ring rounded mr-3 last:mr-0 mb-3">
                            <span class="inline-flex justify-center items-center">
                                <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                    <path fill="currentColor"
                                        d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z">
                                    </path>
                                </svg>
                                <!---->
                            </span>
                            <span class="pl-2 pr-2">{{ empty($role) ? __('Create') : __('Update') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="md:rounded flex flex-col bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900 lg:mb-0 lg:col-span-2 xl:col-span-3">
            <div class="md:rounded bg-white  dark:bg-gray-900 dark:border-gray-900 items-center">
                <header class="flex items-stretch border-b border-gray-100 dark:border-gray-700">
                    <p class="flex items-center py-3 grow font-bold px-4">
                        <span class="inline-flex justify-center items-center w-6 h-6 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </span> {{ __('Set Permissions') }}</span>
                    </p>
                </header>
                <div class="p-6 flex-1">
                    @include('pages.roles._permissions', ['disabled' => $disabled ?? ''])
                </div>
                <div class="border-gray-100 dark:border-gray-700 p-6 border-t">
                    <div class="flex items-center justify-end flex-wrap -mb-3">
                        @php
                            $roleId = empty($role) ? null : $role->id;
                        @endphp
                        <a href="{{ url('roles/reload-permissions/' . $roleId) }}"
                            class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-blue-600 text-white border-blue-700 hover:bg-blue-700 py-2 px-3 focus:ring rounded mr-3 last:mr-0 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="inline-block"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            @lang('Reload New Permissions')
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>
</x-app-layout>

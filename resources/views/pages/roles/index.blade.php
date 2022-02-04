<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold leading-tight"> {{ __('Roles & Permissions') }} </h1>
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('roles') }}
    </x-slot>

    <div class="md:rounded block bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900">
        <header class="flex items-stretch">
            <h2 class="p-3 grow font-semibold">
                Management Roles and Permissions
            </h2>
        </header>
        <div class="p-4">
            <div class="flex items-center justify-end pb-3">
                <div class="font-bold">
                    <a href="{{ url('roles/create') }}" class="px-4 py-3 bg-gray-800 text-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width=16 height=16 class="inline-block" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>New</span>
                    </a>
                </div>
            </div>
            <div class="rounded shadow mt-2">
                <table class="pb-4 border-gray-100 dark:border-gray-700">
                    <thead class="bg-gray-800 text-gray-100">
                        <tr>
                            <th>Name</th>
                            <th>Guard</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->guard_name }}</td>
                                <td>{{ $role->updated_at_formatted }}</td>
                                <td class="actions-cell">
                                    <div class="flex items-center flex-nowrap -mb-3">
                                        <a href="{{ url('roles/' . $role->id) }}"
                                            class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-blue-600 text-white border-blue-700 hover:bg-blue-700 py-2 px-3 focus:ring rounded mr-3 last:mr-0 mb-3">
                                            <span class="inline-flex justify-center items-center">
                                                <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                                    <path fill="currentColor"
                                                        d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        @can('edit_roles')
                                            <a href="{{ url('roles/' . $role->id . '/edit') }}"
                                                class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-red-600 text-white border-red-700 hover:bg-red-700 py-2 px-3 focus:ring rounded mr-3 last:mr-0 mb-3">
                                                <span class="inline-flex justify-center items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        class="inline-block" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </span>
                                            </a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                @empty($roles->links())
                    <div class="table-pagination bg-gray-50 py-3 px-4">
                        {{ $roles->links() }}
                    </div>
                @endempty
            </div>
        </div>
        <!---->
    </div>

</x-app-layout>

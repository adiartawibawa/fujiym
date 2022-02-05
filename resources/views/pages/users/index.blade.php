<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold leading-tight"> {{ __('Users') }} </h1>
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('users') }}
    </x-slot>

    <div class="md:rounded block bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-900">
        <header class="flex items-stretch">
            <h2 class="p-3 grow font-semibold">
                Management Users
            </h2>
        </header>
        <div class="p-4">
            <x-flash-message></x-flash-message>
            @include('pages.users._filter')
            <div class="rounded shadow mt-2">
                <table class="pb-4 border-gray-100 dark:border-gray-700">
                    <thead class="bg-gray-800 text-gray-100">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Verified_at</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->verified_at_formatted }}</td>
                                <td>{{ $user->roles->implode('name', ', ') }}</td>
                                <td class="actions-cell">
                                    <div class="flex items-center flex-nowrap -mb-3">
                                        @can('view_users')
                                            <a href="{{ url('users/' . $user->id) }}"
                                                class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-blue-600 text-white border-blue-700 hover:bg-blue-700 py-2 px-3 focus:ring rounded mr-3 last:mr-0 mb-3">
                                                <span class="inline-flex justify-center items-center">
                                                    <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                                        <path fill="currentColor"
                                                            d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        @endcan
                                        @if ($user->show_edit_remove_btn)
                                            @can('edit_users')
                                                <a href="{{ url('users/' . $user->id . '/edit') }}"
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
                                            @can('delete_users')
                                                <a href="{{ url('users/' . $user->id) }}"
                                                    class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap ring-blue-700 focus:outline-none transition-colors duration-150 border bg-red-600 text-white border-red-700 hover:bg-red-700 py-2 px-3 focus:ring rounded mr-3 last:mr-0 mb-3"
                                                    onclick="event.preventDefault();if (confirm('Do you want to remove this?')) {document.getElementById('delete-role-{{ $user->id }}').submit();}">
                                                    <span class="inline-flex justify-center items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width=16 height=16
                                                            class="inline-block" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <form id="delete-role-{{ $user->id }}"
                                                    action="{{ url('users/' . $user->id) }}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    @csrf
                                                </form>
                                            @endcan
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                @empty($users->links())
                    <div class="table-pagination bg-gray-50 py-3 px-4">
                        {{ $users->links() }}
                    </div>
                @endempty
            </div>
        </div>
        <!---->
    </div>

</x-app-layout>

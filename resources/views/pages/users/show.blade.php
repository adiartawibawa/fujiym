<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold leading-tight"> {{ __('Users') }} </h1>
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('user-show', $user) }}
    </x-slot>

    <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('https://images.unsplash.com/photo-1616840420121-7ad8ed885f11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80')"
            title="Woman holding a mug">
        </div>
        <div
            class="w-full bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal shadow">
            <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $user->name }}</div>
                <p class="text-gray-700 text-base">Email : {{ $user->email }}</p>
                <p class="text-gray-700 text-base">Verified : {{ $user->verified_at_formatted }}</p>
                <p class="text-gray-700 text-base">Updated : {{ $user->created_at_formatted }}</p>
            </div>
        </div>
    </div>

</x-app-layout>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-3 rounded relative" role="alert">
        <strong class="font-bold">Whoops!</strong>
        <span class="text-sm block sm:inline">{{ __('There are some problems with your input.') }}</span>
        <span class="text-xs">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    </div>
@endif

@if (session('success'))
    <div class="bg-emerald-100 border border-emerald-400 text-emerald-500 dark:text-emerald-400 px-4 py-3 mb-3 rounded relative"
        role="alert">
        {{ session('success') }}
    </div>

@endif

@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-500 dark:text-red-400 px-4 py-3 mb-3 rounded relative"
        role="alert">
        {{ session('error') }}
    </div>
@endif

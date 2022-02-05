<form method="GET" action="{{ route('users.index') }}">
    <div class="flex items-center justify-between">
        <div class="flex">
            <div class="form-group col-md-4">
                <input type="text" name="q" class="form-control" id="q" placeholder="Type name or email.."
                    value="{{ !empty($filter['q']) ? $filter['q'] : '' }}">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="start_date" class="form-control datepicker" id="start_date"
                    placeholder="Start date" value="{{ !empty($filter['start_date']) ? $filter['start_date'] : '' }}">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="end_date" class="form-control datepicker" id="end_date" placeholder="End date"
                    value="{{ !empty($filter['end_date']) ? $filter['end_date'] : '' }}">
            </div>
            <div class="form-group col-md-2">
                <button class="py-2 px-4 mx-2 bg-rose-600 text-white rounded"><i class="fas fa-search"></i>
                    {{ __('Search') }}</button>
            </div>
        </div>
        <div class="form-group col-md-2">
            @can('add_users')
                <a href="{{ url('users/create') }}" class="py-2 px-4 mx-2 bg-sky-600 text-white rounded">
                    {{ __('New') }}</a>
            @endcan
        </div>
    </div>
</form>

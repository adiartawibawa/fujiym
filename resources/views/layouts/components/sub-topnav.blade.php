<section class="p-6">
    <div class="justify-between items-center block md:flex">
        <div class="flex shrink items-center justify-center mb-6 md:mb-0">
            @if (isset($header))
                <header>
                    {{ $header }}
                </header>
            @endif
        </div>
        <div class="flex shrink items-center justify-center">
            @if (isset($breadcrumbs))
                @include('layouts.components.breadcrumbs')
            @endif
        </div>
    </div>
</section>

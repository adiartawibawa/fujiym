<footer class="bg-white py-2 px-6 dark:bg-gray-900 dark:text-gray-200 border-t">
    <div class="justify-between items-center block md:flex text-xs text-rose-400">
        <div class="flex shrink items-center justify-center mb-6 md:mb-0">
            <div>
                <span class="font-bold">{{ config('app.name') }}</span> Ver.1.0.0 © {{ date('Y') }}
            </div>
        </div>
        <div class="flex shrink items-center justify-center">
            <div class="md:py-2">
                <a href="#" class="hover:text-rose-500 cursor-pointer">
                    Made with 💙 by <span class="font-bold">{{ config('app.creator') }} </span>
                </a>
            </div>
        </div>
    </div>
</footer>

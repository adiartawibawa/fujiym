<footer class="bg-white py-2 px-6 dark:bg-gray-900">
    <div class="justify-between items-center block md:flex text-sm">
        <div class="flex shrink items-center justify-center mb-6 md:mb-0">
            <div> {{ config('app.name') }} <b>ver. 1.0.0</b> © {{ date('Y') }} </div>
        </div>
        <div class="flex shrink items-center justify-center">
            <div class="md:py-2">
                <a href="#">
                    Made with 💙 by <span class="font-bold">{{ config('app.creator') }} </span>
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="flex items-center flex-col justify-center overflow-hidden fixed inset-0 z-40" style="display: none;">
    <div class="absolute inset-0 bg-gradient-to-tr from-gray-700 via-gray-900 to-gray-700 opacity-90"></div>
</div>
<div class="fixed inset-0 flex flex-col-reverse p-9 overflow-hidden z-100 pointer-events-none"></div>

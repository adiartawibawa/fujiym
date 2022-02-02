<x-guest-layout>
    <div class="hidden lg:flex items-center justify-center bg-gray-800 bg-opacity-60 flex-1 h-screen bg-cover bg-center bg-blend-overlay"
        style="background-image: url(https://images.unsplash.com/photo-1550407590-fe5359dd2b6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80)">
    </div>
    <div class="lg:w-1/2 xl:max-w-screen-sm">
        <div class="py-12 bg-rose-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
            <div class="cursor-pointer flex items-center">
                <div>
                    <svg class="w-10 text-rose-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                        viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                                stroke: currentColor;
                                stroke-width: 20;
                                stroke-linecap: round;
                                stroke-miterlimit: 3;
                            }

                        </style>
                        <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                            <g>
                                <path id="Layer0_0_1_STROKES" class="st0"
                                    d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="text-2xl text-rose-800 tracking-wide ml-2 font-semibold">{{ config('app.name') }}</div>
            </div>
        </div>
        <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
            <h2
                class="text-center text-4xl text-rose-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">
                Sign Up
            </h2>
            <div class="mt-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}"
                            class="text-sm font-bold text-gray-700 tracking-wide" />
                        <x-jet-input id="name"
                            class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-rose-500"
                            type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}"
                            class="text-sm font-bold text-gray-700 tracking-wide" />
                        <x-jet-input id="email"
                            class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-rose-500"
                            type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}"
                            class="text-sm font-bold text-gray-700 tracking-wide" />
                        <x-jet-input id="password"
                            class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-rose-500"
                            type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"
                            class="text-sm font-bold text-gray-700 tracking-wide" />
                        <x-jet-input id="password_confirmation"
                            class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-rose-500"
                            type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-between mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button
                            class="bg-rose-500 text-gray-100 p-4 rounded tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-rose-600
                                shadow-lg">
                            {{ __('Register') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="mt-6 text-sm font-display font-semibold text-gray-700 text-center">
            <a class="cursor-pointer text-rose-600 hover:text-rose-800">
                Made with 💙 by <span class="font-bold">{{ config('app.creator') }} </span>
            </a>
        </div>
    </div>
</x-guest-layout>

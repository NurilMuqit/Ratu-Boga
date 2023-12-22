<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo" class="mb-0 pb-0">
            <x-authentication-card-logo />
        </x-slot>
        <div class="text-center mt-0 mb-8 pt-0 text-junggleGreen">
            <h1 class=" font-bold text-3xl">Hai, Registrasi Dulu Ya</h1>
            <p class="text-base mt-2">Sudah punya akun?
                <a class="underline text-flame hover:text-gray-900 font-bold" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>

            </p>
        </div>
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                {{-- <x-label for="name" value="{{ __('Name') }}" /> --}}
                <x-input id="name"
                    class="block mt-1 w-full placeholder-metalicSilver focus:placeholder-junggleGreen" type="text"
                    name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="Masukkan nama disini" />
            </div>

            <div class="mt-4">
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input id="email"
                    class="block mt-1 w-full placeholder-metalicSilver focus:placeholder-junggleGreen" type="email"
                    name="email" :value="old('email')" required autocomplete="username"
                    placeholder="Masukkan email disini" />
            </div>

            <div class="mt-4">
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input id="phone"
                    class="block mt-1 w-full placeholder-metalicSilver focus:placeholder-junggleGreen" type="text"
                    name="phone" :value="old('phone')" required autocomplete="phone"
                    placeholder="Masukkan nomor Hp disini" />
            </div>

            <div class="mt-4 relative">
                {{-- <x-label for="password" value="{{ __('Password') }}" /> --}}
                <x-input id="password"
                    class="block mt-1 w-full placeholder-metalicSilver focus:placeholder-junggleGreen" type="password"
                    name="password" required autocomplete="new-password" placeholder="Masukkan password disini" />
                <x-toggle-password />
            </div>

            <div class="mt-4 relative">
                {{-- <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <x-input id="password_confirmation"
                    class="block mt-1 placeholder-metalicSilver w-full focus:placeholder-junggleGreen" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Konfirmsi password disini" />
                <x-toggle-password_confirmation />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600  hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex flex-col justify-end mt-4">

                <x-button class="mt-6 w-full justify-center items-center">
                    {{ __('Buat Akun') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<x-guest-layout>

    <x-authentication-card>
        <x-slot name="logo" class="mb-0 pb-0">
            <x-authentication-card-logo />
        </x-slot>
        <div class="text-center mt-0 mb-8 pt-0 text-junggleGreen">
            <h1 class="font-bold text-3xl">Hai, Selamat Datang</h1>
            <p class="text-base mt-2">Belum punya akun?
                <a class="underline hover:text-gray-900 text-flame font-bold" href="{{ route('register') }}">
                    {{ __('Buat Akun') }}
                </a>
            </p>
        </div>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input id="email"
                    class="block text-left mt-1 w-full placeholder-metalicSilver focus:placeholder-junggleGreen"
                    type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    placeholder="Masukkan alamat email" />
            </div>

            <div class="py-2">
                <div class="relative">
                    <x-input id="password"
                        class="block mt-1 w-full placeholder-metalicSilver focus:placeholder-junggleGreen"
                        type="password" name="password" required autocomplete="current-password"
                        placeholder="Masukkan password disini" />
                    <x-toggle-password />
                </div>
            </div>

            <div class="flex mt-6 justify-between">
                <label for="remember_me" class="flex items-center ">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 hover:text-gray-900 text-sm font-bold text-flame">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm font-bold text-flame  hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
            </div>

            <div class="flex justify-center items-center mt-6">

                <x-button class="w-full justify-center items-center">
                    {{ __('Masuk') }}
                </x-button>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>

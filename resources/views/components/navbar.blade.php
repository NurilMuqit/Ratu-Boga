{{-- Badge Cart --}}
<?php
use App\Http\Controllers\MenuDisplayController;
$total = MenuDisplayController::cartItem();
?>

<nav class="bg-slateGreen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-6">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo-white.png') }}" alt="" class="w-10 me-3">
            <span
                class="self-center PlayfairDisplay text-2xl font-semibold whitespace-nowrap text-white font-PlayfairDisplay">
                Ratu Boga</span>
        </a>
        <div class="flex md:order-2 items-center">
            <div class="py-2 content-center me-20">
                <a href="{{ route('home') }}"
                    class="font-medium text-white text-base mr-0 md:mr-0 {{ request()->routeIs('home') ? 'border-b-4 border-flame mx-1.5 py-2' : '' }}"
                    style="margin-right: 2rem">Beranda</a>
                <a href="{{ route('daftar-menu') }}"
                    class="font-medium text-white text-base mr-3 md:mr-0 {{ request()->routeIs('daftar-menu') ? 'border-b-4 border-flame mx-1.5 py-2' : '' }}"
                    style="margin-right: 2rem">Menu</a>
                @if (auth()->check() && auth()->user()->usertype === '1')
                    <a href="{{ route('admin.dashboard') }}"
                        class="font-medium text-white text-base mr-3 md:mr-0 {{ request()->routeIs('admin.dashboard') ? 'border-b-4 border-flame mx-1.5 py-2' : '' }}"
                        style="margin-right: 2rem">Dashboard</a>
                @endif
            </div>
            @if (Route::has('login'))
                @auth
                    <div class="flex items-center">
                        <a href="{{ route('cart-list') }}">
                            <i class="fa-solid fa-cart-shopping text-white text-xl"></i>
                        </a>
                        <div class="bg-red-500 rounded-full w-4 h-4 -mt-6 -ms-2">
                            <p class="text-xs text-white text-center">{{ $total }}</p>
                        </div>
                        @livewire('navigation-menu')

                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="text-white bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center me-5 ">
                        LOGIN</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="text-white bg-flame font-medium rounded-lg text-sm px-6 py-3 text-center me-3">
                            SIGNUP</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>

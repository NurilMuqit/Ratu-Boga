@extends('layouts.general')

@section('title', 'Menu')

@section('content')
    {{-- <section class="mt-16 mb-24 ms-20">
        <h1 class="text-junggleGreen font-bold text-4xl">Menu Favorit</h1>
        <div class="w-min-screen bg-slateGreen mt-12 rounded-l-full py-12">
            <div class="flex">
                <img src="{{ asset('images/ayam-geprek.png') }}" alt="" class="w-1/4 ms-24">
                <div class="flex flex-col items-start ms-12 mt-7">
                    <h2 class="text-white text-5xl font-bold">Ayam Geprek Spesial</h2>
                    <p class="text-white mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor <br>incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br>exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="#"
                        class="text-white text-sm bg-flame font-medium py-4 px-8 text-center mt-16 rounded-tl-xl rounded-br-xl">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <h1 class="text-3xl font-bold mt-12 mb-8 ms-20">Daftar Menu</h1>

        {{-- <div class="tab-menu mx-20 text-metalSaurus mt-12 mb-16 text-xl flex justify-between">
            <a href="#" class="font-bold text-junggleGreen border-b-4 border-junggleGreen pb-2">Semua</a>
            <a href="#">Nasi Goreng</a>
            <a href="#">Mie Pangsit</a>
            <a href="#">Ayam</a>
            <a href="#">Bakso</a>
            <a href="#">Minuman</a>

        </div> --}}

        <div class="menu-list mx-20 mb-20 flex flex-wrap justify-start">
            @foreach ($menuDisplay as $menuDisplay)
                <div class="max-w-xs bg-slateGreen border-gray-600 me-5 rounded-lg shadow mb-8">
                    <a href="menu-detail/{{ $menuDisplay->id }}">
                        <div class="h-48 overflow-hidden">
                            <img class="rounded-t-lg object-cover" src="menu/{{ $menuDisplay->image }}" alt="" />
                        </div>
                    </a>
                    <div class="p-5 flex flex-col">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">
                                {{ $menuDisplay->menu_name }}
                            </h5>
                        </a>
                        <h6 class="text-white font-medium">Rp {{ number_format($menuDisplay->menu_price, 0, ',', '.') }}
                        </h6>
                        <a href="menu-detail/{{ $menuDisplay->id }}"
                            class="text-white text-sm bg-flame font-medium py-2 px-8 text-center mt-12 rounded-md">
                            Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection

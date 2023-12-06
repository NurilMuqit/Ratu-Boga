@extends('layouts.general')

@section('title', $menuDisplay->menu_name)

@section('content')
    <div class="flex mx-auto my-32">
        <div class="h-80 w-96 overflow-hidden ms-32">
            <img class="object-cover w-full h-full" src="{{ asset('menu/'. $menuDisplay->image) }}" alt="" />
        </div>
        <div class="flex flex-col ms-12">
            <h1 class="text-4xl font-bold">{{ $menuDisplay->menu_name }}</h1>
            <h2 class="text-2xl font-bold mt-2">Rp {{ number_format($menuDisplay->menu_price, 0, ',', '.') }}</h2>
            <h3 class="mt-6 font-bold">Deskripsi :</h3>
            <p class="text-gray-900">{{ $menuDisplay->menu_description }}</p>  

            <div class="flex items-center mt-9">
                <button type="button">
                    <i class="fa-solid fa-minus text-gray-200 bg-gray-300 border-gray-300 border-2 rounded-full p-2"></i>
                </button>
                <p class="mx-4">0</p>
                <button type="button">
                    <i class="fa-solid fa-plus text-flame border-flame border-2 rounded-full p-2 hover:text-white hover:bg-flame"></i>
                </button>
            </div>

            <form action="/add-to-cart" method="POST">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menuDisplay->id }}">
                <div class="flex mt-8">
                    {{-- <a href=""
                    class="text-flame text-sm border-flame border-2 font-bold w-48 py-2 px-8 text-center me-4 hover:bg-flame hover:text-white rounded-md">
                    Tambah keranjang</a> --}}
                <button 
                    class="text-white text-sm bg-flame font-medium w-48 py-4 px-8 text-center rounded-md">
                    Tambah keranjang</button>
                </div>
            </form>

        </div>
    </div>
@endsection

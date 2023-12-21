@extends('layouts.general')

@section('title', $menuDisplay->menu_name)

@section('content')
    <div class="flex mx-auto my-32">
        <div class="h-80 w-96 overflow-hidden ms-32">
            <img class="object-cover w-full h-full" src="{{ asset('menu/' . $menuDisplay->image) }}" alt="" />
        </div>
        <div class="flex flex-col ms-12">
            <h1 class="text-4xl font-bold">{{ $menuDisplay->menu_name }}</h1>
            <h2 class="text-2xl font-bold mt-2">Rp {{ number_format($menuDisplay->menu_price, 0, ',', '.') }}</h2>
            <h3 class="mt-4 font-bold">Deskripsi :</h3>
            <p class="text-sm text-gray-900">{{ $menuDisplay->menu_description }}</p>
            <div class="flex mt-4">
                @if ($menuDisplay->menu_quantity < 1)
                    <h3 class="font-bold text-flame">Stok Habis</h3>
                @else
                    <h3 class="font-bold">Stok :</h3>
                    <p class="text-gray-900">{{ $menuDisplay->menu_quantity }}</p>
                @endif
            </div>

            <div class="flex items-center mt-4">
                <button type="button" class="quantity-control" data-action="decrement">
                    <i class="fa-solid fa-minus text-gray-200 bg-gray-300 border-gray-300 border-2 rounded-full p-2"></i>
                </button>
                <input type="number" class="hidden mx-0 bg-transparent border-0 w-auto" id="quantity" name="quantity"
                    value="1" min="1" max="{{ $menuDisplay->menu_quantity }}">
                <p id="quantityDisplay" class="mx-4">1</p>
                <button type="button" class="quantity-control" data-action="increment">
                    <i
                        class="fa-solid fa-plus text-flame border-flame border-2 rounded-full p-2 hover:text-white hover:bg-flame"></i>
                </button>
            </div>

            <form action="/add-to-cart" method="POST">
                @csrf
                <input type="hidden" name="menu_id" value="{{ $menuDisplay->id }}">
                <input type="hidden" name="quantity" id="quantityInput" value="1">
                <!-- Tambahkan input tersembunyi untuk menyimpan jumlah -->
                <div class="flex mt-8">
                    <button class="text-white text-sm bg-flame font-medium w-48 py-4 px-8 text-center rounded-md">
                        Tambah keranjang
                    </button>
                </div>
            </form>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const quantityElement = document.getElementById("quantity");
                    const quantityDisplay = document.getElementById("quantityDisplay");
                    const quantityInput = document.getElementById("quantityInput");

                    document.querySelector("[data-action='decrement']").addEventListener("click", function() {
                        updateQuantity(-1);
                    });

                    document.querySelector("[data-action='increment']").addEventListener("click", function() {
                        updateQuantity(1);
                    });

                    function updateQuantity(change) {
                        let quantity = parseInt(quantityDisplay.textContent) + change;
                        quantity = Math.max(1, Math.min(quantity, {{ $menuDisplay->menu_quantity }}));
                        quantityDisplay.textContent = quantity;
                        quantityInput.value = quantity;
                    }
                });
            </script>

        </div>
    </div>
@endsection

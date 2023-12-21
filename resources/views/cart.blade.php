@extends('layouts.general')

@section('title', 'Keranjang')

@section('content')
    <div class="flex flex-col">
        <section class="mt-16 mb-20 mx-32">
            <h1 class="text-junggleGreen font-bold text-4xl">Keranjang</h1>
            @php
                $totalCheckboxPrice = 0;
            @endphp
            @foreach ($menus as $items)
                <div class="cart-container">
                    <div class="mt-12 flex">
                        <div class="h-24 w-36 overflow-hidden rounded-lg">
                            <img src="{{ asset('menu/' . $items->image) }}" alt="" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col ms-12">
                            <h2 class="">{{ $items->menu_name }}</h2>
                            <h3 class="text-xl font-bold mt-1">Rp {{ number_format($items->menu_price, 0, ',', '.') }}</h3>



                            <div class="flex mt-2">

                                <a href="/remove-cart/{{ $items->cart_id }}">
                                    <i class="fa-solid fa-trash text-flame"></i>
                                </a>
                                <div class="inline-flex mx-4 mt-1 items-center ">
                                    <label class="relative flex items-center rounded-full text-flame cursor-pointer"
                                        htmlFor="ripple-on" data-ripple-dark="true">
                                        <input id="ripple-on" type="checkbox"
                                            data-price="{{ $items->quantity * $items->menu_price }}"
                                            class="itemCheckbox before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-#E8512A before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10" />
                                        <span
                                            class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                                fill="currentColor" stroke="currentColor" stroke-width="1">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                    </label>
                                </div>


                            </div>
                        </div>
                        <div class="flex flex-col ms-80 mt-3">
                            <div class="flex">
                                <h4 class="font-medium text-gray-400 me-16">Total barang</h4>
                                <h5 class="font-medium text-gray-400">x{{ $items->quantity }}</h5>
                            </div>
                            <div class="flex mt-4">
                                <h4 class="font-bold text-junggleGreen text-base me-16">Subtotal</h4>
                                <h5 class="font-bold text-junggleGreen text-base">Rp
                                    {{ number_format($items->quantity * $items->menu_price, 0, ',', '.') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="min-w-screen h-0.5 bg-gray-400 my-4"></div>
                </div>
                @php
                    $totalCheckboxPrice += $items->quantity * $items->menu_price;
                @endphp
            @endforeach

        </section>

        <section class="self-end me-28 mt-16 mb-32">
            <div class="flex items-center">
                <h3 class="text-gray-400 font-medium">Total Harga : </h3>
                <h4 class="text-2xl font-bold text-junggleGreen ms-2 me-16" id="totalPrice">Rp
                    {{-- {{ number_format($totalPrice, 0, ',', '.') }} --}}
                </h4>
                <a href="/Order" type="button"
                    class="text-white bg-flame font-medium rounded-lg text-sm px-6 py-3 text-center me-3 md:me-0">
                    Buat Pesanan</a>
            </div>
        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const checkboxes = document.querySelectorAll('.itemCheckbox');
                const totalPriceDisplay = document.getElementById('totalPrice');

                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        updateTotalPrice();
                    });
                });

                function updateTotalPrice() {
                    let totalCheckboxPrice = 0;

                    checkboxes.forEach(function(checkbox) {
                        if (checkbox.checked) {
                            totalCheckboxPrice += parseFloat(checkbox.getAttribute('data-price'));
                        }
                    });

                    totalPriceDisplay.textContent =
                        `Rp ${totalCheckboxPrice.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&.')}`;
                }
            });
        </script>
    </div>
@endsection

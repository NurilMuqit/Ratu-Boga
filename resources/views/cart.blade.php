@extends('layouts.general')

@section('title', 'Keranjang')

@section('content')
    <div class="flex flex-col">
        <section class="mt-16 mb-20 mx-32">
            <h1 class="text-junggleGreen font-bold text-4xl">Keranjang</h1>

            @php
                $totalQuantity = 0;
                $totalPrice = 0;
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
                            </div>
                        </div>
                        <div class="flex flex-col ms-80 mt-3">
                            <div class="flex">
                                <h4 class="font-medium text-gray-400 me-16">Total barang</h4>
                                <h5 class="font-medium text-gray-400">x{{ $items->quantity }}</h5>
                                @php
                                    $totalQuantity += $items->quantity;
                                    $totalPrice += $items->quantity * $items->menu_price;
                                @endphp
                            </div>
                            <div class="flex mt-4">
                                <h4 class="font-bold text-junggleGreen text-base me-16">Subtotal</h4>
                                <h5 class="font-bold text-junggleGreen text-base">Rp
                                    {{ number_format($items->quantity * $items->menu_price, 0, ',', '.') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="min-w-screen h-0.5 bg-gray-400 my-4"></div>
                </div>
            @endforeach

        </section>

        <section class="self-end me-28 mt-16 mb-32">
            <div class="flex items-center">
                <h3 class="text-gray-400 font-medium">Total Harga : </h3>
                <h4 class="text-2xl font-bold text-junggleGreen ms-2 me-16" id="totalPrice">Rp
                    {{ number_format($totalPrice, 0, ',', '.') }}
                </h4>
                <form action="/checkout"
                    class="text-white bg-flame font-medium rounded-lg text-sm px-6 py-3 text-center me-3 md:me-0"
                    method="POST">
                    @csrf
                    <div class="hidden">
                        <div class="">
                            <label for="exampleInputEmail1" class="form-label">Quantity</label>
                            <input type="number" name="qty" value="{{ $totalQuantity }}" id="qty"
                                class="form-control" aria-describedby="">
                        </div>
                        <div class="">
                            <label class="form-label">price</label>
                            <input type="number" name="total_price" value="{{ $totalPrice }}" id="total_price"
                                class="form-control" aria-describedby="">
                        </div>
                        <div class="">
                            <label for="exampleInputPassword1" class="form-label">Username</label>
                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                                class="form-control">
                        </div>
                        <div class=" form-check">
                            <label class="form-check-label" for="exampleCheck1">phone</label>
                            <input type="text" name="phone" id="phone"value="{{ Auth::user()->phone }}"
                                class="form-check-input">

                        </div>
                    </div>
                    <button type="submit">
                        Buat Pesanan</button>
                </form>
            </div>
        </section>

    </div>
@endsection

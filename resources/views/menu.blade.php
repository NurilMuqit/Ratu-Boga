<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Menu - Ratu Boga</title>

    {{-- Menyembunyikan Scrollbar --}}
    <style>
        .hide-scroll-y::-webkit-scrollbar {
            width: 0rem;
        }

        .hide-scroll-y::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    </style>

</head>

<body class="bg-almond m-0 p-0 hide-scroll-y overflow-y-scroll font-PlusJakartaSans">
    <header>
        <x-navbar />
    </header>

    <section class="mt-16 mb-24 ms-20">
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
                    <button type="button"
                        class="text-white text-sm bg-flame font-medium py-4 px-8 text-center mt-16 rounded-tl-xl rounded-br-xl">
                        Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</body>

</html>

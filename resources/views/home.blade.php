<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ratu Boga</title>

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

<body class="bg-[#EEE1D1] m-0 p-0 hide-scroll-y overflow-y-scroll">
    <header>
        <x-navbar />
    </header>
    <section>
        <div class="container min-w-full h-auto px-24 pt-16 pb-8 mx-auto flex justify-between items-center bg-[#2A635C]">
            <div class="ms-7">
                <h1 class="text-white text-7xl font-bold">HARGA KAKI LIMA <br>RASA BINTANG LIMA</h1>
                <p class="text-[#DADADA] mt-5 text-xl">Kami menyajikan makanan dari bahan berkualitas yang memanjakan
                    dompet anda. Kami berkomitmen untuk menjaga harga yang bersaing tanpa mengorbankan kualitas makanan.
                </p>
                <button type="button"
                    class="text-white bg-[#E8512A] font-medium rounded-lg text-sm px-6 py-4 text-center mt-16 flex">
                    Pesan Sekarang <img src="{{ asset('images/arrow-right.svg') }}" alt=""
                        class="w-5 ms-3"></button>
            </div>
            <img src="{{ asset('images/homeTop-nasgor.png') }}" alt="" class="mt-36 h-96 self-end"
                style="margin-right: -96px">
        </div>

        <svg id="wave" style="transform:rotate(180deg); transition: 0.3s; margin-top: -40px;"
            viewBox="0 0 1440 220" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(42, 99, 92, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(42, 99, 92, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                d="M0,66L80,55C160,44,320,22,480,33C640,44,800,88,960,102.7C1120,117,1280,103,1440,99C1600,95,1760,103,1920,121C2080,139,2240,169,2400,172.3C2560,176,2720,154,2880,132C3040,110,3200,88,3360,66C3520,44,3680,22,3840,25.7C4000,29,4160,59,4320,66C4480,73,4640,59,4800,47.7C4960,37,5120,29,5280,25.7C5440,22,5600,22,5760,22C5920,22,6080,22,6240,18.3C6400,15,6560,7,6720,36.7C6880,66,7040,132,7200,157.7C7360,183,7520,169,7680,143C7840,117,8000,81,8160,62.3C8320,44,8480,44,8640,40.3C8800,37,8960,29,9120,55C9280,81,9440,139,9600,157.7C9760,176,9920,154,10080,132C10240,110,10400,88,10560,69.7C10720,51,10880,37,11040,36.7C11200,37,11360,51,11440,58.7L11520,66L11520,220L11440,220C11360,220,11200,220,11040,220C10880,220,10720,220,10560,220C10400,220,10240,220,10080,220C9920,220,9760,220,9600,220C9440,220,9280,220,9120,220C8960,220,8800,220,8640,220C8480,220,8320,220,8160,220C8000,220,7840,220,7680,220C7520,220,7360,220,7200,220C7040,220,6880,220,6720,220C6560,220,6400,220,6240,220C6080,220,5920,220,5760,220C5600,220,5440,220,5280,220C5120,220,4960,220,4800,220C4640,220,4480,220,4320,220C4160,220,4000,220,3840,220C3680,220,3520,220,3360,220C3200,220,3040,220,2880,220C2720,220,2560,220,2400,220C2240,220,2080,220,1920,220C1760,220,1600,220,1440,220C1280,220,1120,220,960,220C800,220,640,220,480,220C320,220,160,220,80,220L0,220Z">
            </path>
        </svg>
    </section>

    <section class="ms-7 mb-32">
        <img src="{{ asset('images/quotes-sign.svg') }}" alt="" class="ms-32 z-10 mt-44">
        <div>
            <h2 class="text-5xl z-20 me-28 ms-64" style="margin-top: -5rem">Kami menggunakan bahan yang <span
                    class="text-[#E8512A] font-bold">segar &
                    sehat</span>. Pada saat yang sama, kami menghindari penggunaan bahan-bahan
                yang <span class="text-[#E8512A] font-bold">mengganggu kesehatan anda </span>.</h2>
        </div>
    </section>
    <section class="mb-80">
        <h2 class="text-6xl font-bold text-center text-[#163A35] mt-80">Kami menyajikan menu yang <br>cocok dengan lidah
            anda</h2>
        <div class="mx-52 my-28 flex justify-between">
            <div class="max-w-xs rounded-lg shadow bg-[#E8512A] bg-opacity-70 ">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/nasgor01.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            Nasi Goreng</h5>
                    </a>
                    <p class="mb-3 font-normal text-white text-center">Selengkapnya</p>
                </div>
            </div>
            <div class="max-w-xs rounded-lg shadow bg-[#E8512A] bg-opacity-70 ">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/nasgor01.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            Nasi Goreng</h5>
                    </a>
                    <p class="mb-3 font-normal text-white text-center">Selengkapnya</p>
                </div>
            </div>
            <div class="max-w-xs rounded-lg shadow bg-[#E8512A] bg-opacity-70 ">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/nasgor01.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                            Nasi Goreng</h5>
                    </a>
                    <p class="mb-3 font-normal text-white text-center">Selengkapnya</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

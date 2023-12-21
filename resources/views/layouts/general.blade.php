<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title') - Ratu Boga</title>

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

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>

</html>

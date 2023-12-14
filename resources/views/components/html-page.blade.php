<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ratu-Boga') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ URL('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/ModalAlertStyles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    @vite('resources/css/ModalAlertStyles.css')
    @vite('resources/css/table.css')
    {{-- Menyembunyikan Scrollbar --}}
    <style>
        .hide-scroll-y::-webkit-scrollbar {
            width: 0rem;
        }

        .hide-scroll-y::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    </style>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-almond m-0 p-0 hide-scroll-y overflow-y-scroll font-PlusJakartaSans antialiased">
    {{-- <x-banner /> --}}


    <div class="min-h-screen bg-gray-100 ">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
<script src="{{ asset('js/datepicker.js') }}"></script>

</html>

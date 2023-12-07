@extends('layouts.general')

@section('title', 'Menu')

@section('content')
    <section>
        <div class="flex mx-20 mt-12 mb-12 justify-between">
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold">Hasil Pencarian</h1>
                @if ($menuDisplay->isEmpty())
                    <p class="mt-8 text-flame mb-32">Hasil tidak ditemukan</p>
                @endif
            </div>

            {{-- searchbar --}}
            <form action="/search"
                class="Search rounded-md border hover:border-flame border-solid border-neutral-400 flex h-10">
                <input type="search"
                    class="  block focus:ring-0 h-full  min-w-0 border-0 flex-auto bg-transparent  px-3 py-[0.25rem] text-base font-normal outline-none transition duration-200 ease-in-out"
                    placeholder="Cari disini . . ." aria-label="Search" name="query" aria-describedby="button-addon1" />
                {{-- Search Button --}}
                <button
                    class="  h-full  flex items-center   px-6  text-xs font-medium   transition duration-150 ease-in-out"
                    type="button" id="button-addon1" data-te-ripple-init data-te-ripple-color="light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#163A35"
                        style="transition: fill 0.3s ease;" class="h-5 w-5" onmouseover="this.style.fill='#E8512A'"
                        onmouseout="this.style.fill='#163A35'">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="menu-list mx-20 mb-20 flex flex-wrap justify-start">
            @foreach ($menuDisplay as $items)
                <div class="max-w-xs bg-slateGreen border-gray-600 me-5 rounded-lg shadow mb-8">
                    <a href="menu-detail/{{ $items->id }}">
                        <div class="h-48 overflow-hidden">
                            <img class="rounded-t-lg object-cover" src="menu/{{ $items->image }}" alt="" />
                        </div>
                    </a>
                    <div class="p-5 flex flex-col">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">
                                {{ $items->menu_name }}
                            </h5>
                        </a>
                        <h6 class="text-white font-medium">Rp {{ number_format($items->menu_price, 0, ',', '.') }}
                        </h6>
                        <a href="menu-detail/{{ $items->id }}"
                            class="text-white text-sm bg-flame font-medium py-2 px-8 text-center mt-12 rounded-md">
                            Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

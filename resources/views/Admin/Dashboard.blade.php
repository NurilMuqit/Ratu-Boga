<x-HtmlPage>
    <div class="p-2 w-screen h-screen ">
        <div class="h-full w-full">
            <div class="h-full overflow-hidden  shadow-xl sm:rounded-lg">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>

                    <div class="w-10/12 px-8 ml-2 bg-white rounded-lg text-junggleGreen">
                        <header class=" py-10  place-items-center grid grid-cols-2  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full ">
                                <h1 class="font-PlayfairDisplay  text-4xl text-gray-900">
                                    Dashboard
                                </h1>
                                <p>Hi, {{ explode(' ', Auth::user()->name)[0] }} Welcome back to Ratu Boga Admin!</p>

                            </div>

                            <div class="flex justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </div>


                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="grid items-center  grid-cols-2 ">
                                <h3 class="font-bold text-flame">Sales Summary</h3>
                                <div class="flex justify-end">
                                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-10">
                                </div>
                            </div>

                        </main>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-HtmlPage>

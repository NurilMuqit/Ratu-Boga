<x-HtmlPage>
    <x-navbar></x-navbar>

    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>


    <section class=" bg-gray-100 text-gray-600 min-h-screen p-4">
        <div class="h-full">

            <div>

                <div class="relative px-4 sm:px-6 h-56 lg:px-8 max-w-lg mx-auto">
                    <img class="h-full object-cover  w-full rounded-t shadow-lg"
                        src="{{ asset('images/latarlogin.jpg') }}" />
                </div>

                <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto">
                    <div class="bg-white px-8 pb-6 rounded-b shadow-lg">

                        <div class="text-center mb-6">
                            <div class="mb-2">
                                <img class="-mt-8 inline-flex rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                    width="64" height="64" alt="User" />
                            </div>
                            <h1 class="text-xl leading-snug text-gray-800 font-semibold mb-2">Invoice</h1>
                            <div class="text-sm">

                            </div>
                        </div>



                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">
                                        Nama</span></label>
                                    <input
                                        class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                        type="text" value=" {{ $order->name }}" placeholder="" readonly />
                                </div>

                                <div class="flex space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1">Nomor Hp
                                        </label>
                                        <input
                                            class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                            type="text" value="{{ $order->phone }}" readonly />
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1">Jumalah</label>
                                        <input
                                            class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                            type="text" value="{{ $order->qty }}" readonly />
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Total Harga</label>
                                    <input
                                        class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                        type="text" value="{{ $order->total_price }}" readonly />
                                </div>

                            </div>

                            <div class="mt-6">
                                <div class="mb-4">
                                    <button
                                        class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out w-full bg-flame hover:bg-opacity- text-white focus:outline-none focus-visible:ring-2">
                                        {{ $order->status }}</button>
                                </div>
                                <div class="text-xs text-gray-500 italic text-center">Terimakasih</div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


</x-HtmlPage>

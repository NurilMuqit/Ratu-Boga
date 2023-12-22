{{-- resources/views/admin/OrderDetails.blade.php --}}



<x-HtmlPage>
    <div class="w-screen p-2 h-screen  overflow-hidden">
        <div class="h-full w-full  overflow-hidden">
            <div class="h-full overflow-hidden  shadow-xl">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="hidden sm:flex w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>
                    {{-- //modal add --}}
                    <x-modal-ratu-boga name="AddCategory" title="AddCategory">
                        @slot('colorAlertModal')
                            bg-slateGreen
                        @endslot
                        @slot('modalConten')
                            <x-add-category></x-add-category>
                        @endslot

                    </x-modal-ratu-boga>
                    {{-- ////delete modal --}}
                    <x-modal-ratu-boga id="confirmationModal" name="delete" title="Warning">
                        @slot('colorAlertModal')
                            bg-warning
                        @endslot
                        @slot('modalConten')
                            <x-delete-modal>
                                @slot('item')
                                @endslot
                            </x-delete-modal>
                        @endslot
                    </x-modal-ratu-boga>
                    @if (session()->has('success'))
                        <x-alert>
                            @slot('colorAlert')
                                bg-success
                            @endslot
                            @slot('AlertConten')
                                <h3 class="font-bold -mt-8 text-2xl">Nice!</h3>
                                {{ session()->get('success') }}
                            @endslot
                        </x-alert>
                    @endif
                    @if (session()->has('failure'))
                        <x-alert>
                            @slot('colorAlert')
                                bg-flame
                            @endslot
                            @slot('AlertConten')
                                <h3 class="font-bold -mt-8 text-xl">Oops! An Error Occurred</h3>
                                {{ session()->get('failure') }}
                            @endslot
                        </x-alert>
                    @endif
                    <!-- resources/views/user/index.blade.php -->


                    <div
                        class="sm:w-10/12 w-12/12 sm:px-8 px-1 sm:ml-2 bg-white overflow-x-hidden  rounded-lg text-junggleGreen">
                        <header class="py-4 sm:py-4  place-items-center grid grid-cols-2  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full   ">
                                <h1 class="font-PlayfairDisplay text-3xl sm:text-4xl text-gray-900">
                                    Category
                                </h1>
                            </div>

                            <a href="{{ route('home') }}"
                                class="md:flex hidden justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </a>
                            <!-- resources/views/admin/orders/index.blade.php -->
                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="flex items-center   sm:py-4  ">
                                <div class="font-semibold text-sm text-flame hover:opacity-75"
                                    href="{{ url('#') }}">
                                    <a href="{{ route('admin.Orders') }}">All orders</a>
                                </div>
                                <div class="font-semibold text-sm pl-4 hover:opacity-75" href="{{ url('#') }}">
                                    <a href="{{ route('admin.Orders', ['status' => 'paid']) }}">Paid</a>
                                </div>
                                <div class="font-semibold text-sm pl-4 hover:opacity-75" href="{{ url('#') }}">
                                    <a href="{{ route('admin.Orders', ['status' => 'unpaid']) }}">Unpaid</a>
                                </div>





                            </div>
                            {{-- content main --}}
                            <div style="height: 36rem "
                                class="grid  overflow-y-hidden   mt-2 sm:mt-0 m-0 text-junggleGreen md:shadow-md border-t  h-full rounded-xl   ">

                                <div
                                    class="overflow-x-hidden border-b my-2 md:h-14 h-24 md:grid flex flex-wrap  grid-flow-col md:grid-cols-2 md:gap-4">
                                    <div class="w-full h-4/6 md:h-full">
                                        <div
                                            class="Search rounded-md border hover:border-flame border-solid border-neutral-300  flex w-5/6  md:w-4/6 my-2 md:mx-6 mx-auto h-4/6  items-stretch">
                                            <input type="search"
                                                class="  block focus:ring-0 h-full  min-w-0 border-0 flex-auto bg-transparent  px-3 py-[0.25rem] text-base font-normal   outline-none transition duration-200 ease-in-out  "
                                                placeholder="Search" aria-label="Search"
                                                aria-describedby="button-addon1" />
                                            <!--Search button-->
                                            <button
                                                class="  h-full  flex items-center   px-6  text-xs font-medium   transition duration-150 ease-in-out"
                                                type="button" id="button-addon1" data-te-ripple-init
                                                data-te-ripple-color="light">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="#163A35" style="transition: fill 0.3s ease;" class="h-5 w-5"
                                                    onmouseover="this.style.fill='#E8512A'"
                                                    onmouseout="this.style.fill='#163A35'">
                                                    <path fill-rule="evenodd"
                                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                    <div class=" px-4 -mt-3 md:-mt-0 md:w-auto w-full md:m-0">
                                        <div class=" md:m-0 flex w-full md:justify-end justify-center  h-full">
                                            {{-- ///filter --}}

                                        </div>
                                    </div>
                                </div>
                                <div style="height: 32rem" class="pb-4 px-6 overflow-y-auto ">

                                    <div>

                                        <div class="relative px-4 sm:px-6 h-56 lg:px-8 max-w-lg mx-auto">
                                            <img class="h-full object-cover  w-full rounded-t shadow-lg"
                                                src="{{ asset('images/latarlogin.jpg') }}" />
                                        </div>

                                        <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto">
                                            <div class="bg-white px-8 pb-6 rounded-b shadow-lg">

                                                <div class="text-center mb-6">

                                                    <h1
                                                        class="text-xl mt-8 leading-snug text-gray-800 font-semibold mb-2">
                                                        Pesanan #{{ $order->id }}</h1>
                                                    <div class="text-sm">

                                                    </div>
                                                </div>



                                                <div>
                                                    <div class="m-auto">

                                                        @foreach ($orderDetails as $orderDetail)
                                                            <div class="flex space-x-4">
                                                                <div class="flex-1">
                                                                    <label
                                                                        class="block text-sm text-center font-medium mb-1">Produk
                                                                    </label>
                                                                    <input
                                                                        class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                                                        type="text"
                                                                        value="{{ $orderDetail->product_name }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="flex-1">
                                                                    <label
                                                                        class="block text-sm text-center font-medium mb-1">Quantity
                                                                    </label>
                                                                    <input
                                                                        class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                                                        type="text"
                                                                        value="{{ $orderDetail->quantity }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="flex-1">
                                                                    <label
                                                                        class="block text-sm text-center font-medium mb-1">Total
                                                                        price
                                                                    </label>
                                                                    <input
                                                                        class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full"
                                                                        type="text"
                                                                        value="Rp.{{ $orderDetail->total_price }}"
                                                                        readonly />
                                                                </div>




                                                            </div>
                                                        @endforeach


                                                    </div>


                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </main>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>

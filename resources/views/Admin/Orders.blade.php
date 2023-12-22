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
                                    <table
                                        class="text-sm w-full flex flex-row flex-no-wrap overflow-hidden  md:my-2 my-5">
                                        <thead class="text-junggleGreen text-normal">
                                            <tr
                                                class=" flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                                <th>
                                                    <div
                                                        class="p-3 md:p-2 text-left md:text-center endLeft bg-gray-100 ">
                                                        id
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left middle bg-gray-100 ">
                                                        Name
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left middle bg-gray-100 ">
                                                        Email
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left middle bg-gray-100 ">
                                                        Adderess
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left middle bg-gray-100 ">
                                                        Date
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left middle bg-gray-100 ">
                                                        Price
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left middle bg-gray-100 ">
                                                        Status
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 Actions text-left endRight bg-gray-100 ">
                                                        Status
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="flex-1 sm:flex-none ">
                                            {{-- // --}}
                                            @foreach ($orders as $order)
                                                <tr class="md:grid hidden ">
                                                    <td class="py-2"></td>
                                                </tr>
                                                <tr
                                                    class="flex row py-0  hover:text-white  border-0 flex-col  flex-no wrap sm:table-row  mb-0">
                                                    <td>
                                                        <div
                                                            class="endLeft md:text-center border-grey-light border  p-3 cursor-pointer">
                                                            {{ $order->id }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="middle border-grey-light border p-3 cursor-pointer">
                                                            <div class="flex items-center gap-3">
                                                                <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg"
                                                                    alt="Spotify"
                                                                    class="inline-block relative object-center !rounded-full w-4 h-4 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                                {{ $order->name }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="middle border-grey-light border   p-3  cursor-pointer">
                                                            {{ $order->phone }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="middle border-grey-light border   p-3  cursor-pointer">
                                                            {{ $order->qty }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="middle border-grey-light border   p-3  cursor-pointer">
                                                            {{ $order->created_at->format('Y-m-d') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="middle border-grey-light border   p-3 cursor-pointer">
                                                            {{ $order->total_price }}
                                                        </div>
                                                    </td>

                                                    <td>
                                                        @if ($order->status == 'Unpaid')
                                                            <div
                                                                class="middle border-grey-light border   p-3 cursor-pointer">
                                                                <div
                                                                    class="inline-flex items-center px-1 rounded-full gap-x-2 text-red-500 bg-red-100/60">
                                                                    <svg width="12" height="12"
                                                                        viewBox="0 0 12 12" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor"
                                                                            stroke-width="1" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    <h2 class="text-xs font-normal">
                                                                        {{ $order->status }}
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        @elseif ($order->status == 'Paid')
                                                            <div
                                                                class="middle border-grey-light border   p-3 cursor-pointer">
                                                                <div
                                                                    class="inline-flex items-center px-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                                    <svg width="12" height="12"
                                                                        viewBox="0 0 12 12" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10 3L4.5 8.5L2 6"
                                                                            stroke="currentColor" stroke-width="1"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                    <h2 class="text-xs font-normal">
                                                                        {{ $order->status }}
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <div
                                                            class="endRight border-grey-light border   p-3 cursor-pointer">
                                                            <a href="{{ route('order.details', ['orderId' => $order->id]) }}"
                                                                class="relative p-1 rounded bg-flame align-middle  font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-5 h-5  text-xs text-gray-900 hover:text-flame hover:bg-gray-900/10 active:bg-gray-900/20"
                                                                type="button">
                                                                Lihat Detail
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            {{-- //Pagination --}}

                        </main>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>

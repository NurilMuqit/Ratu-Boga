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

                    <div
                        class="sm:w-10/12 w-12/12 sm:px-8 px-1 sm:ml-2 bg-white overflow-x-hidden  rounded-lg text-junggleGreen">
                        <header class="py-4 sm:py-4  place-items-center grid grid-cols-2  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full   ">
                                <h1 class="font-PlayfairDisplay text-3xl sm:text-4xl text-gray-900">
                                    Customers
                                </h1>
                            </div>

                            <a href="{{ route('home') }}"
                                class="md:flex hidden justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </a>


                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="flex items-center   sm:py-4  ">
                                <a class="font-semibold text-sm text-flame   hover:opacity-75"
                                    href="{{ url('/admin/Customers') }}">
                                    All Customers</a>
                            </div>
                            {{-- content main --}}
                            <div style="height: 36rem "
                                class="grid  mt-2 sm:mt-0 m-0 text-junggleGreen md:shadow-md border-t  h-full rounded-xl   ">
                                <div
                                    class="overflow-x-hidden border-b my-2 md:h-14 h-24 md:grid flex flex-wrap  grid-flow-col md:grid-cols-2 md:gap-4">
                                    <div class="w-full h-4/6 md:h-full">

                                        <form action="{{ route('admin.Customers') }}" method="GET"
                                            class="Search rounded-md border hover:border-flame border-solid border-neutral-300  flex w-5/6  md:w-4/6 my-2 md:mx-6 mx-auto h-4/6  items-stretch">
                                            <input type="search"
                                                class="  block focus:ring-0 h-full  min-w-0 border-0 flex-auto bg-transparent  px-3 py-[0.25rem] text-base font-normal   outline-none transition duration-200 ease-in-out  "
                                                placeholder="Search" aria-label="Search" name="search"
                                                value="{{ request('search') }}" aria-describedby="button-addon1" />
                                            <!--Search button-->
                                            <button
                                                class="  h-full  flex items-center   px-6  text-xs font-medium   transition duration-150 ease-in-out"
                                                type="submit" id="button-addon1" data-te-ripple-init
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
                                        </form>

                                    </div>
                                    <div class=" px-4 -mt-3 md:-mt-0 md:w-auto w-full md:m-0">
                                        <div class=" md:m-0 flex w-full md:justify-end justify-center  h-full">
                                            {{-- ///filter --}}
                                            <div class=" flex text-xs  md:my-auto my-0  h-3/6">
                                                <select id="filter"
                                                    class="block px-3 input w-24  m-auto  flex cursor-pointer focus:ring-0 font-bold  text-xs   rounded-md hover:opacity-75 transition duration-300 ease-in-out transform    text-junggleGreen text-opacity-50">
                                                    <option selected>Filter</option>
                                                    <option value="Minuman">Minuman</option>
                                                    <option value="Makanan">Makanan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 32rem" class="pb-4 px-6 overflow-y-auto ">
                                    <table
                                        class="text-sm w-full flex flex-row flex-no-wrap overflow-hidden  md:my-2 my-5">
                                        <thead class="text-junggleGreen text-normal">
                                            <tr
                                                class=" flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                                <th class="endLeft">
                                                    <div class="p-3 md:p-2 text-left md:text-center  bg-gray-100">
                                                        @php
                                                            $currentSortBy = request('sort_by');
                                                            $currentSortOrder = request('sort_order', 'desc');
                                                        @endphp

                                                        <a class="grid grid-cols-2 text-junggleGreen"
                                                            href="{{ route('admin.Customers', ['sort_by' => 'id', 'sort_order' => $currentSortBy === 'id' && $currentSortOrder === 'desc' ? 'asc' : 'desc']) }}">
                                                            id
                                                            @if ($currentSortBy === 'id')
                                                                @if ($currentSortOrder === 'desc')
                                                                    <svg class="my-auto " width="14" height="8"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        style="transform: rotate(180deg);">
                                                                        <path
                                                                            d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                @else
                                                                    <svg class="my-auto mt-2" width="14"
                                                                        height="8" viewBox="0 0 20 20"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                @endif
                                                            @else
                                                                <svg class="my-auto mt-2" width="14" height="8"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            @endif
                                                        </a>
                                                    </div>

                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left  bg-gray-100 ">
                                                        @php
                                                            $currentSortBy = request('sort_by');
                                                            $currentSortOrder = request('sort_order', 'desc');
                                                        @endphp

                                                        <a class="flex  mx-2  text-junggleGreen"
                                                            href="{{ route('admin.Customers', ['sort_by' => 'name', 'sort_order' => $currentSortBy === 'name' && $currentSortOrder === 'desc' ? 'asc' : 'desc']) }}">
                                                            Name
                                                            @if ($currentSortBy === 'name')
                                                                @if ($currentSortOrder === 'desc')
                                                                    <svg class="my-auto " width="14" height="8"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        style="transform: rotate(180deg);">
                                                                        <path
                                                                            d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                @else
                                                                    <svg class="my-auto mt-2" width="14"
                                                                        height="8" viewBox="0 0 20 20"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                @endif
                                                            @else
                                                                <svg class="my-auto mt-2" width="14"
                                                                    height="8" viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            @endif
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left  bg-gray-100 ">
                                                        Email
                                                    </div>
                                                </th>

                                                <th>
                                                    <div class="p-3 md:p-2 text-left  bg-gray-100 ">

                                                        @php
                                                            $currentSortBy = request('sort_by');
                                                            $currentSortOrder = request('sort_order', 'desc');
                                                        @endphp

                                                        <a class="flex  mx-2  text-junggleGreen"
                                                            href="{{ route('admin.Customers', ['sort_by' => 'created_at', 'sort_order' => $currentSortBy === 'created_at' && $currentSortOrder === 'desc' ? 'asc' : 'desc']) }}">
                                                            Date
                                                            @if ($currentSortBy === 'created_at')
                                                                @if ($currentSortOrder === 'desc')
                                                                    <svg class="my-auto " width="14"
                                                                        height="8" viewBox="0 0 20 20"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        style="transform: rotate(180deg);">
                                                                        <path
                                                                            d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                @else
                                                                    <svg class="my-auto mt-2" width="14"
                                                                        height="8" viewBox="0 0 20 20"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                @endif
                                                            @else
                                                                <svg class="my-auto mt-2" width="14"
                                                                    height="8" viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M21.1761 2.48797L11.7361 12.952C11.3521 13.4 10.6481 13.4 10.2641 12.952L0.824149 2.48797C0.216149 1.81597 0.664149 0.727966 1.56015 0.727966L20.4401 0.727966C21.3361 0.727966 21.7841 1.81597 21.1761 2.48797Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            @endif
                                                        </a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="p-3 md:p-2 text-left  bg-gray-100 ">
                                                        Phone
                                                    </div>
                                                </th>
                                                <th class="endRight">
                                                    <div class="p-3 md:p-2 Actions text-left  bg-gray-100 ">
                                                        Actions
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="flex-1 sm:flex-none ">
                                            @foreach ($users as $user)
                                                @if ($user->usertype != 1)
                                                    <tr class="md:grid hidden ">
                                                        <td class="py-2"></td>
                                                    </tr>
                                                    {{-- // --}}
                                                    <tr
                                                        class="flex row py-0 border-grey-light border  hover:text-white  hover:bg-slateGreen transition duration-500 ease-in-out transform  flex-col  flex-no wrap sm:table-row  mb-0">
                                                        <td x-data
                                                            x-on:click="$dispatch('open-modal', { name: 'detailuser'})">
                                                            <div class=" md:text-center  p-3 cursor-pointer">
                                                                {{ $user->id }}
                                                            </div>
                                                            {{-- detailuser --}}
                                                            <x-modal-ratu-boga name="detailuser" title="detailuser">
                                                                @slot('colorAlertModal')
                                                                    bg-slateGreen
                                                                @endslot
                                                                @slot('modalConten')
                                                                    <div class="px-5 py-2">
                                                                        <!-- Tampilkan detail user jika data user ada -->
                                                                        <p> {{ $user->id }}</p> {{ $user->name }}
                                                                    </div>
                                                                @endslot
                                                            </x-modal-ratu-boga>
                                                        </td>
                                                        <td>
                                                            <div class=" p-3 cursor-pointer">
                                                                <div class="flex items-center ">
                                                                    <img src="{{ $user->profile_photo_url }}"
                                                                        class="inline-block relative object-center mx-2 !rounded-full w-8 h-8 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain ">
                                                                    {{ $user->name }}
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="p-3  cursor-pointer">
                                                                {{ $user->email }}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="p-3  cursor-pointer">
                                                                {{ $user->created_at->format('Y-m-d') }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class=" p-3 cursor-pointer">
                                                                {{ $user->phone }}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="w-full cursor-pointer">

                                                                <a href="{{ url('/destroyuser', $user->id) }}"
                                                                    onclick="showConfirmationModal(event)" x-data
                                                                    x-on:click="$dispatch('open-modal',{name : 'delete'})"
                                                                    class="relative w-full hover:text-flame   transition-all  w-full h-full text-gray-900  "
                                                                    type="button">
                                                                    <span class="  w-full">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 mx-auto"
                                                                            fill="currentColor">
                                                                            <path
                                                                                d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            {{-- Pagination --}}
                            <div class="pb-8">
                                {{ $users->links('vendor.pagination.default') }}
                            </div>

                        </main>

                        @if (session('reload'))
                            <script>
                                window.location.reload();
                            </script>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>

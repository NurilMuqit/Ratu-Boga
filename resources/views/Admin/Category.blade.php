<x-HtmlPage>
    <div class="w-screen p-2 h-screen  overflow-hidden">
        <div class="h-full w-full  overflow-hidden">
            <div class="h-full overflow-hidden  shadow-xl">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="hidden sm:flex w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>

                    <div
                        class="sm:w-10/12 w-12/12 sm:px-8 px-1 sm:ml-2 bg-white overflow-hidden  rounded-lg text-junggleGreen">
                        <header class="py-4 sm:py-4  place-items-center grid grid-cols-2  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full   ">
                                <h1 class="font-PlayfairDisplay text-3xl sm:text-4xl text-gray-900">
                                    Category
                                </h1>
                            </div>

                            <div class="md:flex hidden justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </div>


                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="flex items-center   sm:py-4  ">
                                <a class="font-semibold text-sm  hover:opacity-75"
                                    href="{{ url('/admin/products') }}">Product</a>
                                <a class="font-semibold text-flame text-sm pl-4 hover:opacity-75"
                                    href="{{ url('#') }}">Category</a>
                            </div>
                            {{-- content main --}}
                            <div style="height: 36rem "
                                class="grid  md:overflow-hidden  mt-2 sm:mt-0 m-0 text-junggleGreen shadow-md border-t  h-full rounded-xl   ">
                                <div
                                    class="overflow-x-hidden border-b my-2 md:h-14 h-24 md:grid flex flex-wrap  grid-flow-col md:grid-cols-2 md:gap-4">
                                    <div class="w-full h-4/6 md:h-full">
                                        <form action="{{ route('admin.category') }}" method="GET"
                                            class="Search rounded-md border hover:border-flame border-solid border-neutral-300  flex w-5/6  md:w-4/6 my-2 md:mx-6 mx-auto h-4/6  items-stretch">
                                            <input type="search"
                                                class="  block focus:ring-0 h-full  min-w-0 border-0 flex-auto bg-transparent  px-3 py-[0.25rem] text-base font-normal   outline-none transition duration-200 ease-in-out  "
                                                placeholder="Search" aria-label="Search" name="search"
                                                aria-describedby="button-addon1" value="{{ request('search') }}" />
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
                                                {{-- ///add menu --}}
                                                <div x-data x-on:click="$dispatch('open-modal',{name : 'AddCategory'})"
                                                    class="button-add md:m-0 m-auto mx-2  md:mx-2 cursor-pointer   justify-center  opacity-100 hover:opacity-75 transition duration-300 ease-in-out transform bg-slateGreen text-white   w-24  py-0.5   rounded-md  flex ">
                                                    <h2 class=" font-bold my-1 md:my-0. mx-1">+</h2>
                                                    <p style="font-size: 0.9em;" class="font-bold my-auto text-xs  ">
                                                        Create new</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 32rem  " class="pb-0">

                                    <div
                                        class="  overflow-x-hidden lg:overflow-hidden  w-full h-full  item-center bg-white flex flex-wrap  {{ $categories->count() > 0 ? 'md:h-auto lg:py-0 py-8 grid-flow-row auto-rows-auto  lg:grid lg:grid-cols-3 gap-2' : '' }} ">
                                        {{-- ///view --}}
                                        @foreach ($categories as $category)
                                            <div
                                                class=" lg:m-0 overflow-hidden  sm:h-40  w-70 sm:w-80 xl:w-96 h-36 bg-slateGreen  cursor-pointer rounded-xl overflow-hidden   m-auto   flex text-almond c-card   scale-90">
                                                <img class="rounded-full w-28 h-28 sm:w-32 sm:h-32 bg-white my-4 mx-1 sm:m-4"
                                                    src="{{ asset('images/nasgor01.png') }}" alt="gambar">
                                                <div class="text ml-1 mt-3 ">
                                                    <span class="text-xl font-bold">{{ $category->category }}</span>
                                                    <p class="break-all mt-2 text-xs">Category menu </p>

                                                    <div class="text-sm font-bold flex gap-2 mt-3">
                                                        <p>total product: </p>
                                                        <p> {{ $category->menus->count() }}</p>
                                                    </div>


                                                    <div
                                                        class="py-4 place-items-center grid grid-cols-2 gap-2 h-2/12  text-xs">
                                                        <a href="{{ url('/edit_category', $category->id) }}"
                                                            class="button-edit opacity-100 hover:opacity-75 bg-flame text-white transition duration-300 ease-in-out transform  w-20 lg:w-24 px-3 py-1 border-solid border border-flame rounded-md  flex ">
                                                            <svg width="10" height="9"
                                                                class="m-auto mt-1 mx-0.5" viewBox="0 0 10 9"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.9573 0.420517C8.82401 0.287198 8.66576 0.181442 8.49159 0.10929C8.31742 0.0371367 8.13075 0 7.94223 0C7.75371 0 7.56703 0.0371367 7.39287 0.10929C7.2187 0.181442 7.06045 0.287198 6.92716 0.420517L1.3812 5.96671C1.24561 6.1024 1.14343 6.26775 1.08271 6.4497L0.397246 8.50693C0.375349 8.57294 0.37224 8.64374 0.388267 8.71142C0.404294 8.7791 0.438826 8.84099 0.488003 8.89017C0.53718 8.93934 0.599064 8.97388 0.666739 8.98991C0.734414 9.00593 0.805212 9.00282 0.871222 8.98093L2.92836 8.29543C3.1106 8.23543 3.2756 8.13269 3.41134 7.99694L8.9573 2.4515C9.09072 2.31818 9.19657 2.15988 9.26879 1.98564C9.341 1.81139 9.37817 1.62462 9.37817 1.43601C9.37817 1.24739 9.341 1.06062 9.26879 0.886377C9.19657 0.712133 9.09072 0.553831 8.9573 0.420517ZM7.45738 0.951511C7.52072 0.886592 7.59632 0.83489 7.67979 0.799401C7.76326 0.763913 7.85295 0.745344 7.94365 0.74477C8.03434 0.744197 8.12426 0.76163 8.20817 0.79606C8.29208 0.83049 8.36833 0.881232 8.43249 0.945345C8.49665 1.00946 8.54745 1.08567 8.58194 1.16956C8.61643 1.25345 8.63394 1.34335 8.63343 1.43405C8.63293 1.52476 8.61443 1.61446 8.57901 1.69796C8.54359 1.78146 8.49194 1.8571 8.42708 1.9205L7.87736 2.471L6.90766 1.50126L7.45813 0.951511H7.45738ZM6.37743 2.0315L7.34638 3.00124L2.88112 7.46669C2.82779 7.51987 2.76283 7.55992 2.69138 7.58369L1.34595 8.03219L1.79442 6.68745C1.81811 6.61573 1.85817 6.55051 1.91142 6.49695L6.37743 2.0315Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <p style="font-size: 0.9em;"
                                                                class=" m-auto text-xs font-semibold ">
                                                                Edit</p>
                                                        </a>

                                                        <a href="{{ url('/destroy', $category->id) }}"
                                                            onclick="showConfirmationModal(event)" x-data
                                                            x-on:click="$dispatch('open-modal',{name : 'delete'})"
                                                            class="button-delete opacity-100 hover:opacity-75 bg-transparent hover:bg-flame transition duration-300 ease-in-out transform text-flame hover:text-white w-20 lg:w-24 mr-2 lg:mr-0 px-5 py-1 flex  border-solid border border-flame rounded-md  ">

                                                            <svg width="12" height="11" class="my-auto  mx-0.5"
                                                                viewBox="0 0 12 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.96151 2.29167H6.79484C6.79484 2.04855 6.69826 1.81539 6.52636 1.64349C6.35445 1.47158 6.12129 1.375 5.87817 1.375C5.63506 1.375 5.4019 1.47158 5.22999 1.64349C5.05809 1.81539 4.96151 2.04855 4.96151 2.29167ZM4.27401 2.29167C4.27401 2.081 4.3155 1.87241 4.39612 1.67778C4.47673 1.48315 4.5949 1.30631 4.74386 1.15735C4.89282 1.00839 5.06966 0.890227 5.26429 0.80961C5.45891 0.728993 5.66751 0.6875 5.87817 0.6875C6.08884 0.6875 6.29744 0.728993 6.49206 0.80961C6.68669 0.890227 6.86353 1.00839 7.01249 1.15735C7.16145 1.30631 7.27961 1.48315 7.36023 1.67778C7.44085 1.87241 7.48234 2.081 7.48234 2.29167H10.1178C10.2089 2.29167 10.2964 2.32788 10.3608 2.39235C10.4253 2.45681 10.4615 2.54425 10.4615 2.63542C10.4615 2.72658 10.4253 2.81402 10.3608 2.87848C10.2964 2.94295 10.2089 2.97917 10.1178 2.97917H9.51276L8.97651 8.53004C8.93537 8.95537 8.73728 9.35011 8.42086 9.6373C8.10444 9.92448 7.6924 10.0835 7.26509 10.0833H4.49126C4.06403 10.0834 3.6521 9.92431 3.33578 9.63714C3.01946 9.34997 2.82143 8.95529 2.7803 8.53004L2.24359 2.97917H1.63859C1.54742 2.97917 1.45999 2.94295 1.39552 2.87848C1.33106 2.81402 1.29484 2.72658 1.29484 2.63542C1.29484 2.54425 1.33106 2.45681 1.39552 2.39235C1.45999 2.32788 1.54742 2.29167 1.63859 2.29167H4.27401ZM5.19068 4.46875C5.19068 4.37758 5.15446 4.29015 5.08999 4.22568C5.02553 4.16122 4.93809 4.125 4.84693 4.125C4.75576 4.125 4.66832 4.16122 4.60386 4.22568C4.53939 4.29015 4.50318 4.37758 4.50318 4.46875V7.90625C4.50318 7.99742 4.53939 8.08485 4.60386 8.14932C4.66832 8.21378 4.75576 8.25 4.84693 8.25C4.93809 8.25 5.02553 8.21378 5.08999 8.14932C5.15446 8.08485 5.19068 7.99742 5.19068 7.90625V4.46875ZM6.90942 4.125C7.00059 4.125 7.08803 4.16122 7.15249 4.22568C7.21696 4.29015 7.25317 4.37758 7.25317 4.46875V7.90625C7.25317 7.99742 7.21696 8.08485 7.15249 8.14932C7.08803 8.21378 7.00059 8.25 6.90942 8.25C6.81826 8.25 6.73082 8.21378 6.66636 8.14932C6.60189 8.08485 6.56567 7.99742 6.56567 7.90625V4.46875C6.56567 4.37758 6.60189 4.29015 6.66636 4.22568C6.73082 4.16122 6.81826 4.125 6.90942 4.125ZM3.46459 8.46404C3.48931 8.71917 3.60816 8.95595 3.79797 9.12822C3.98778 9.30048 4.23493 9.39589 4.49126 9.39583H7.26509C7.52142 9.39589 7.76857 9.30048 7.95838 9.12822C8.14819 8.95595 8.26704 8.71917 8.29176 8.46404L8.82251 2.97917H2.93384L3.46459 8.46404Z"
                                                                    fill="#FF2C56" />
                                                            </svg>
                                                            <p style="font-size: 0.9em;"
                                                                class=" my-auto text-xs font-normal ">
                                                                Delete</p>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if ($categories->count() < 1)
                                            <div class="w-full  m-auto">
                                                <img src="{{ asset('images/NoCategory.svg') }}" alt=""
                                                    class="w-64  m-auto">
                                                <h1 class="w-full text-xl font-bold text-center -mt-8">No category</h1>
                                                <p class="text-sm text-center">Your category list is empty.
                                                    Please start adding category.</p>
                                            </div>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            {{-- //Pagination --}}

                            @if (!str_contains(request()->route()->uri, 'edit_category'))
                                {{ $categories->links('vendor.pagination.default') }}
                            @endif
                        </main>


                    </div>
                    <!-- modal-add-category -->
                    {{-- //modal add --}}
                    <x-modal-ratu-boga name="AddCategory" title="AddCategory">
                        @slot('colorAlertModal')
                            bg-slateGreen
                        @endslot
                        @slot('modalConten')
                            <x-add-category :data="$data"></x-add-category>
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
                    {{-- Edit Category --}}
                    <x-modal-ratu-boga name="EditCategory" title="EditCategory">
                        @slot('colorAlertModal')
                            bg-slateGreen
                        @endslot
                        @slot('modalConten')
                            @if ($data)
                                <x-edit-category :data="$data"> </x-edit-category>
                            @endif
                        @endslot
                    </x-modal-ratu-boga>
                    @php
                        $openModal = $data ? true : false;
                    @endphp
                    @if ($categories->count() > 0)
                        {{-- open modal  --}}
                        <a x-data="{ openModal: {{ $openModal ? 'true' : 'false' }} }" x-init="() => { if (openModal) $dispatch('open-modal', { name: 'EditCategory' }) }"
                            href="{{ url('/edit_category', $category->id) }}"></a>
                    @endif
                    {{-- cek for success --}}
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
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>

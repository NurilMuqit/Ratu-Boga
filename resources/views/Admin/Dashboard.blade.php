<x-HtmlPage>
    <div class="p-2 w-screen h-screen ">
        <div class="h-full w-full">
            <div class="h-full overflow-x-hidden  shadow-xl">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="hidden sm:flex w-2/12 h-full ">
                        <x-AdminNavbar />
                    </div>

                    <div
                        class="overflow-x-hidden  overflow-y-scroll sm:w-10/12 w-full  sm:px-8 px-1 sm:ml-2 bg-white   rounded-lg text-junggleGreen">
                        <header class=" py-9  place-items-center grid md:grid-cols-2 grid-cols-1 rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full   ">
                                <h1 class="font-PlayfairDisplay  text-4xl text-gray-900">
                                    Dashboard
                                </h1>
                                <p class="opacity-75 pt-2">Hi, {{ explode(' ', Auth::user()->name)[0] }} Welcome back to
                                    Ratu
                                    Boga Admin!</p>
                            </div>

                            <div class="md:flex hidden  justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </div>


                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="md:grid items-center   md:grid-cols-2  ">
                                <h3 class="font-bold text-flame">Sales Summary</h3>
                                <div class="flex md:justify-end justify-center">


                                </div>
                            </div>
                            {{-- content main --}}
                            {{-- Sales Summary< --}}
                            <div
                                class=" md:grid items-center  text-junggleGreen  md:grid-cols-4 md:h-36 mt-4 grid-flow-col md:gap-6 gap-2 xl:gap-12">
                                {{-- Total Orders --}}
                                <div
                                    class="my-4 md:my-0  flex justify-end rounded-2xl h-full bg-white drop-shadow-md hover:drop-shadow transition duration-300 ease-in-out transform cursor-pointer">
                                    <div class="grid items-center rounded-2xl  grid-cols-2 grid-flow-col h-full w-full">
                                        <div class="flex items-center  justify-center rounded-2xl  h-full  ">
                                            <svg width="84" height="84" viewBox="0 0 73 73" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="36.8712" cy="36.9447" rx="36.0282" ry="36.3227"
                                                    fill="#00B074" fill-opacity="0.15" />
                                                <path
                                                    d="M21.7623 55.5545C24.5004 55.5545 26.7376 53.3222 26.7376 50.5901V18.6048H55.788V50.5901C55.788 53.3222 53.5507 55.5545 50.8127 55.5545"
                                                    fill="#00B074" />
                                                <path
                                                    d="M45.8376 50.5899V46.825H16.7872V50.5899C16.7872 53.322 19.0244 55.5543 21.7625 55.5543H50.8129C48.0748 55.5543 45.8376 53.322 45.8376 50.5899Z"
                                                    fill="#0A5239" />
                                                <path d="M35.6534 24.9684H31.947V26.5677H35.6534V24.9684Z"
                                                    fill="white" />
                                                <path d="M49.9113 24.9684H38.5249V26.5677H49.9113V24.9684Z"
                                                    fill="#F7C604" />
                                                <path d="M35.6534 30.6327H31.947V32.2319H35.6534V30.6327Z"
                                                    fill="white" />
                                                <path d="M49.9113 30.6327H38.5249V32.2319H49.9113V30.6327Z"
                                                    fill="#F7C604" />
                                                <path d="M35.6534 36.2967H31.947V37.896H35.6534V36.2967Z"
                                                    fill="white" />
                                                <path d="M49.9113 36.2967H38.5249V37.896H49.9113V36.2967Z"
                                                    fill="#F7C604" />
                                                <path d="M35.6534 41.961H31.947V43.5602H35.6534V41.961Z"
                                                    fill="white" />
                                                <path d="M49.9113 41.961H38.5249V43.5602H49.9113V41.961Z"
                                                    fill="#F7C604" />
                                                <path opacity="0.1"
                                                    d="M55.7881 42.2275V23.2029C55.3874 23.1362 54.9533 23.1029 54.5193 23.1029C49.2101 23.1029 44.9026 27.4009 44.9026 32.6985C44.9026 37.9961 49.2101 42.2941 54.5193 42.2941C54.9533 42.3274 55.3874 42.2941 55.7881 42.2275Z"
                                                    fill="#0C1E5B" />
                                                <path
                                                    d="M57.8925 40.395C63.2036 40.395 67.5092 36.0989 67.5092 30.7993C67.5092 25.4998 63.2036 21.2036 57.8925 21.2036C52.5813 21.2036 48.2757 25.4998 48.2757 30.7993C48.2757 36.0989 52.5813 40.395 57.8925 40.395Z"
                                                    fill="#FF5B5B" />
                                                <path
                                                    d="M59.5948 31.4654V25.5015H56.1889V31.4654H53.9183L57.8918 36.0966L61.8654 31.4654H59.5948Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="h-full text-black  item-center py-5 rounded-2xl">
                                            <h1 class="my-1 font-bold  opacity-75 xl:text-4xl md:text-2xl text-4xl">
                                                75</h1>
                                            <h4
                                                class="my-1 font-normal opacity-75 xl:text-base  md:text-md sm:text-sm  text-light">
                                                Total Orders
                                            </h4>
                                            <div
                                                class="text-tealGray grid text-xs font-extralight my-1 items-center w-full grid-cols-6 ">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    width="16" height="16" viewBox="0 0 256 256"
                                                    xml:space="preserve">
                                                    <defs></defs>
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                        <circle cx="45" cy="45" r="45"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgba(45,202,154,0.15); fill-rule: nonzero; opacity: 1;"
                                                            transform="matrix(1 0 0 1 0 0)" />
                                                        <path
                                                            d="M 46.112 21.338 c -0.027 -0.018 -0.057 -0.029 -0.084 -0.046 c -0.084 -0.051 -0.168 -0.1 -0.259 -0.138 c -0.038 -0.016 -0.079 -0.023 -0.118 -0.037 c -0.084 -0.029 -0.166 -0.06 -0.255 -0.077 C 45.266 21.014 45.134 21 45 21 s -0.266 0.014 -0.395 0.04 c -0.088 0.018 -0.171 0.049 -0.255 0.077 c -0.039 0.014 -0.08 0.021 -0.118 0.037 c -0.091 0.038 -0.176 0.088 -0.259 0.138 c -0.027 0.016 -0.058 0.028 -0.084 0.046 c -0.109 0.073 -0.211 0.156 -0.303 0.249 L 28.481 36.691 c -0.781 0.781 -0.781 2.047 0 2.828 c 0.781 0.781 2.047 0.781 2.828 0 L 43 27.828 L 43 67 c 0 1.104 0.896 2 2 2 s 2 -0.896 2 -2 l 0 -39.172 L 58.691 39.52 c 0.781 0.781 2.047 0.781 2.828 0 c 0.391 -0.391 0.586 -0.902 0.586 -1.414 s -0.195 -1.023 -0.586 -1.414 L 46.415 21.587 C 46.323 21.495 46.221 21.411 46.112 21.338 z"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,163,137); fill-rule: nonzero; opacity: 1;"
                                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    </g>
                                                </svg>
                                                <h6 class="col-span-5">4% (30 days)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Total Delivered --}}
                                <div
                                    class="my-4 md:my-0 flex justify-end rounded-2xl h-full bg-white drop-shadow-md hover:drop-shadow transition duration-300 ease-in-out transform cursor-pointer">
                                    <div class="grid items-center rounded-2xl  grid-cols-2 grid-flow-col h-full w-full">
                                        <div class="flex items-center  justify-center rounded-2xl  h-full  ">
                                            <svg width="84" height="84" viewBox="0 0 73 73" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="36.03" cy="36.3246" rx="36.03" ry="36.3245"
                                                    fill="#00B074" fill-opacity="0.15" />
                                                <path
                                                    d="M30.7461 16.9495L10.8175 25.1703L30.7461 33.3911L50.6748 25.1703L30.7461 16.9495Z"
                                                    fill="#00B074" />
                                                <path
                                                    d="M22.6574 20.3036L18.9065 21.8163L38.8351 30.0699L42.5534 28.5244L22.6574 20.3036Z"
                                                    fill="#F7C604" />
                                                <path
                                                    d="M10.8175 25.1703V47.8268L30.7462 56.0476V33.3911L10.8175 25.1703Z"
                                                    fill="#0A5239" />
                                                <path
                                                    d="M50.6748 25.1703V47.8268L30.7461 56.0476V33.3911L50.6748 25.1703Z"
                                                    fill="#00D68D" />
                                                <path opacity="0.1"
                                                    d="M50.6748 36.7451C50.0877 36.6136 49.5006 36.5479 48.8809 36.5479C44.0536 36.5479 40.1396 40.4938 40.1396 45.3605C40.1396 47.6295 40.9877 49.7011 42.3902 51.2466L50.6748 47.8268V36.7451Z"
                                                    fill="#0C1E5B" />
                                                <path d="M38.8351 30.07V39.5732L42.5534 38.0277V28.5244L38.8351 30.07Z"
                                                    fill="#F7C604" />
                                                <path
                                                    d="M52.4361 53.5155C57.2638 53.5155 61.1773 49.5699 61.1773 44.7028C61.1773 39.8357 57.2638 35.8901 52.4361 35.8901C47.6085 35.8901 43.6949 39.8357 43.6949 44.7028C43.6949 49.5699 47.6085 53.5155 52.4361 53.5155Z"
                                                    fill="#FF5B5B" />
                                                <path
                                                    d="M51.5229 48.1228C51.262 48.1228 51.0337 48.0241 50.838 47.8268L48.0656 45.0318C47.6742 44.6372 47.6742 44.0124 48.0656 43.6507C48.457 43.2561 49.0767 43.2561 49.4355 43.6507L51.5229 45.7552L55.4369 41.8092C55.8283 41.4146 56.448 41.4146 56.8068 41.8092C57.1982 42.2038 57.1982 42.8286 56.8068 43.1903L52.2079 47.8268C52.0122 48.0241 51.7838 48.1228 51.5229 48.1228Z"
                                                    fill="white" />
                                                <path
                                                    d="M17.2755 44.7686L15.1228 40.2965L13.1005 42.9601L14.2095 43.4533V46.347L16.0034 47.1691V44.2425L17.2755 44.7686Z"
                                                    fill="#F2F5F3" />
                                            </svg>
                                        </div>
                                        <div class="h-full text-black  item-center py-5 rounded-2xl">
                                            <h1 class="my-1 font-bold  opacity-75 text-4xl">75</h1>
                                            <h4 class="my-1 font-normal opacity-75 text-light">Total Delivered</h4>
                                            <div
                                                class="text-tealGray grid text-xs font-extralight my-1 items-center w-full grid-cols-5 ">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    width="16" height="16" viewBox="0 0 256 256"
                                                    xml:space="preserve">
                                                    <defs></defs>
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                        <circle cx="45" cy="45" r="45"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgba(45,202,154,0.15); fill-rule: nonzero; opacity: 1;"
                                                            transform="matrix(1 0 0 1 0 0)" />
                                                        <path
                                                            d="M 46.112 21.338 c -0.027 -0.018 -0.057 -0.029 -0.084 -0.046 c -0.084 -0.051 -0.168 -0.1 -0.259 -0.138 c -0.038 -0.016 -0.079 -0.023 -0.118 -0.037 c -0.084 -0.029 -0.166 -0.06 -0.255 -0.077 C 45.266 21.014 45.134 21 45 21 s -0.266 0.014 -0.395 0.04 c -0.088 0.018 -0.171 0.049 -0.255 0.077 c -0.039 0.014 -0.08 0.021 -0.118 0.037 c -0.091 0.038 -0.176 0.088 -0.259 0.138 c -0.027 0.016 -0.058 0.028 -0.084 0.046 c -0.109 0.073 -0.211 0.156 -0.303 0.249 L 28.481 36.691 c -0.781 0.781 -0.781 2.047 0 2.828 c 0.781 0.781 2.047 0.781 2.828 0 L 43 27.828 L 43 67 c 0 1.104 0.896 2 2 2 s 2 -0.896 2 -2 l 0 -39.172 L 58.691 39.52 c 0.781 0.781 2.047 0.781 2.828 0 c 0.391 -0.391 0.586 -0.902 0.586 -1.414 s -0.195 -1.023 -0.586 -1.414 L 46.415 21.587 C 46.323 21.495 46.221 21.411 46.112 21.338 z"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,163,137); fill-rule: nonzero; opacity: 1;"
                                                            transform=" matrix(1 0 0 1 0 0) "
                                                            stroke-linecap="round" />
                                                    </g>
                                                </svg>
                                                <h6 class="col-span-4">4% (30 days)</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- Total Canceled --}}
                                <div
                                    class=" my-4 md:my-0 flex justify-end rounded-2xl h-full bg-white drop-shadow-md hover:drop-shadow transition duration-300 ease-in-out transform cursor-pointer">
                                    <div
                                        class="grid items-center rounded-2xl  grid-cols-2 grid-flow-col h-full w-full">
                                        <div class="flex items-center  justify-center rounded-2xl  h-full  ">
                                            <svg width="84" height="84" viewBox="0 0 73 73" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="36.03" cy="36.3246" rx="36.03" ry="36.3245"
                                                    fill="#00B074" fill-opacity="0.15" />
                                                <path
                                                    d="M18.6519 64.2747C21.8188 64.2747 24.4063 61.6627 24.4063 58.466V21.041H58.0061V58.466C58.0061 61.6627 55.4185 64.2747 52.2517 64.2747"
                                                    fill="#00B074" />
                                                <path
                                                    d="M46.4972 58.4659V54.0607H12.8975V58.4659C12.8975 61.6626 15.485 64.2746 18.6519 64.2746H52.2517C49.0848 64.2746 46.4972 61.6626 46.4972 58.4659Z"
                                                    fill="#0A5239" />
                                                <path d="M34.718 28.4868H30.4312V30.3581H34.718V28.4868Z"
                                                    fill="#F7C604" />
                                                <path d="M51.2089 28.4868H38.0393V30.3581H51.2089V28.4868Z"
                                                    fill="#F3F2F7" />
                                                <path d="M34.718 35.1142H30.4312V36.9854H34.718V35.1142Z"
                                                    fill="#F7C604" />
                                                <path d="M51.2089 35.1142H38.0393V36.9854H51.2089V35.1142Z"
                                                    fill="#F3F2F7" />
                                                <path d="M34.718 41.7417H30.4312V43.6129H34.718V41.7417Z"
                                                    fill="#F7C604" />
                                                <path d="M51.2089 41.7417H38.0393V43.6129H51.2089V41.7417Z"
                                                    fill="#F3F2F7" />
                                                <path d="M34.718 48.369H30.4312V50.2403H34.718V48.369Z"
                                                    fill="#F7C604" />
                                                <path d="M51.2089 48.369H38.0393V50.2403H51.2089V48.369Z"
                                                    fill="#F3F2F7" />
                                                <path opacity="0.1"
                                                    d="M58.0062 48.681V26.4209C57.5427 26.3429 57.0406 26.304 56.5386 26.304C50.3979 26.304 45.4159 31.3329 45.4159 37.5315C45.4159 43.73 50.3979 48.7589 56.5386 48.7589C57.0406 48.7979 57.5427 48.759 58.0062 48.681Z"
                                                    fill="#0C1E5B" />
                                                <path
                                                    d="M60.4399 46.5371C66.5829 46.5371 71.5627 41.5103 71.5627 35.3094C71.5627 29.1086 66.5829 24.0818 60.4399 24.0818C54.297 24.0818 49.3171 29.1086 49.3171 35.3094C49.3171 41.5103 54.297 46.5371 60.4399 46.5371Z"
                                                    fill="#FF5B5B" />
                                                <path
                                                    d="M64.8064 30.7308L55.7267 39.8846M55.7267 30.7308L64.8064 39.8846"
                                                    stroke="white" stroke-width="4" />
                                                <path
                                                    d="M64.8064 30.7308L55.7267 39.8846M55.7267 30.7308L64.8064 39.8846"
                                                    stroke="white" stroke-width="4" />
                                            </svg>
                                        </div>
                                        <div class="h-full text-black  item-center py-5 rounded-2xl">
                                            <h1 class="my-1 font-bold  opacity-75 text-4xl">75</h1>
                                            <h4 class="my-1 font-normal opacity-75 text-light">Total Canceled</h4>
                                            <div
                                                class="text-tealGray grid text-xs font-extralight my-1 items-center w-full grid-cols-5 ">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    width="16" height="16" viewBox="0 0 256 256"
                                                    xml:space="preserve">
                                                    <defs></defs>
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                        <circle cx="45" cy="45" r="45"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FF5B5B; fill-rule: nonzero; opacity: 0.15;"
                                                            transform="matrix(1 0 0 1 0 0)" />
                                                        <path
                                                            d="M 46.112 21.338 c -0.027 -0.018 -0.057 -0.029 -0.084 -0.046 c -0.084 -0.051 -0.168 -0.1 -0.259 -0.138 c -0.038 -0.016 -0.079 -0.023 -0.118 -0.037 c -0.084 -0.029 -0.166 -0.06 -0.255 -0.077 C 45.266 21.014 45.134 21 45 21 s -0.266 0.014 -0.395 0.04 c -0.088 0.018 -0.171 0.049 -0.255 0.077 c -0.039 0.014 -0.08 0.021 -0.118 0.037 c -0.091 0.038 -0.176 0.088 -0.259 0.138 c -0.027 0.016 -0.058 0.028 -0.084 0.046 c -0.109 0.073 -0.211 0.156 -0.303 0.249 L 28.481 36.691 c -0.781 0.781 -0.781 2.047 0 2.828 c 0.781 0.781 2.047 0.781 2.828 0 L 43 27.828 L 43 67 c 0 1.104 0.896 2 2 2 s 2 -0.896 2 -2 l 0 -39.172 L 58.691 39.52 c 0.781 0.781 2.047 0.781 2.828 0 c 0.391 -0.391 0.586 -0.902 0.586 -1.414 s -0.195 -1.023 -0.586 -1.414 L 46.415 21.587 C 46.323 21.495 46.221 21.411 46.112 21.338 z"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FF5B5B; fill-rule: nonzero; opacity: 1;"
                                                            transform="matrix(1 0 0 1 0 0) rotate(180, 45, 45)"
                                                            stroke-linecap="round" />

                                                    </g>
                                                </svg>
                                                <h6 class="col-span-4">4% (30 days)</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- Total Revenue --}}
                                <div
                                    class="my-4 md:my-0 flex justify-end rounded-2xl h-full bg-white drop-shadow-md hover:drop-shadow transition duration-300 ease-in-out transform cursor-pointer">
                                    <div
                                        class="grid items-center rounded-2xl  grid-cols-2 grid-flow-col h-full w-full">
                                        <div class="flex items-center  justify-center rounded-2xl  h-full  ">
                                            <svg width="84" height="84" viewBox="0 0 73 73" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="36.0301" cy="36.3245" rx="36.03" ry="36.3245"
                                                    fill="#00B074" fill-opacity="0.15" />
                                                <path
                                                    d="M35.6525 20.4718C35.145 20.4718 34.7463 20.0698 34.7463 19.5582V17.256C34.7463 14.7711 32.7527 12.7612 30.3242 12.7612C29.1281 12.7612 28.0407 13.2363 27.1708 14.0768C26.3008 14.9173 25.8659 16.0501 25.8659 17.256V19.5582C25.8659 20.0698 25.4672 20.4718 24.9597 20.4718C24.4522 20.4718 24.0535 20.0698 24.0535 19.5582V17.256C24.0535 15.575 24.706 14.0037 25.8659 12.7978C27.062 11.5919 28.6206 10.9341 30.288 10.9341C33.7314 10.9341 36.5224 13.7479 36.5224 17.2195V19.5217C36.5587 20.0698 36.1599 20.4718 35.6525 20.4718Z"
                                                    fill="#FFD497" />
                                                <path
                                                    d="M49.8972 51.2777H23.4733L19.0875 17.1465H48.0486L49.8972 51.2777Z"
                                                    fill="#00B074" />
                                                <path
                                                    d="M23.4733 51.2777L17.2026 50.1814L10.8957 51.2777L12.7805 17.1465H21.5885L23.4733 51.2777Z"
                                                    fill="#0A5239" />
                                                <path
                                                    d="M34.9635 28.9132C31.5201 28.9132 28.7291 26.0993 28.7291 22.6278V20.3255C28.7291 19.8139 29.1278 19.412 29.6352 19.412C30.1427 19.412 30.5414 19.8139 30.5414 20.3255V22.6278C30.5414 25.1127 32.535 27.086 34.9635 27.086C37.392 27.086 39.4219 25.0761 39.4219 22.5912V20.289C39.4219 19.7774 39.8206 19.3754 40.328 19.3754C40.8355 19.3754 41.2342 19.7774 41.2342 20.289V22.5912C41.2342 26.0993 38.4432 28.9132 34.9635 28.9132Z"
                                                    fill="white" />
                                                <path opacity="0.1"
                                                    d="M36.5947 46.6001C36.5947 48.2811 37.0297 49.889 37.7909 51.2776H49.9335L49.1723 37.2451C48.2662 36.9527 47.3237 36.8065 46.3451 36.8065C40.9443 36.8065 36.5947 41.1917 36.5947 46.6001Z"
                                                    fill="#0C1E5B" />
                                                <path
                                                    d="M51.3834 56.3936C56.7484 56.3936 61.0976 52.0089 61.0976 46.6001C61.0976 41.1913 56.7484 36.8065 51.3834 36.8065C46.0185 36.8065 41.6693 41.1913 41.6693 46.6001C41.6693 52.0089 46.0185 56.3936 51.3834 56.3936Z"
                                                    fill="#FF6966" />
                                                <path
                                                    d="M50.3685 50.4006C50.0785 50.4006 49.8247 50.291 49.6073 50.0717L46.5263 46.9656C46.0913 46.527 46.0913 45.8327 46.5263 45.4308C46.9613 44.9922 47.6499 44.9922 48.0487 45.4308L50.3685 47.7695L54.7181 43.3843C55.153 42.9458 55.8417 42.9458 56.2404 43.3843C56.6754 43.8229 56.6754 44.5172 56.2404 44.9191L51.1296 50.0717C50.9122 50.291 50.6222 50.4006 50.3685 50.4006Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="h-full text-black  item-center py-5 rounded-2xl">
                                            <h1 class="my-1 font-bold  opacity-75 text-4xl">750K</h1>
                                            <h4 class="my-1 font-normal opacity-75 text-light">Total Revenue</h4>
                                            <div
                                                class="text-tealGray grid text-xs font-extralight my-1 items-center w-full grid-cols-5 ">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                    width="16" height="16" viewBox="0 0 256 256"
                                                    xml:space="preserve">
                                                    <defs></defs>
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                        <circle cx="45" cy="45" r="45"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgba(45,202,154,0.15); fill-rule: nonzero; opacity: 1;"
                                                            transform="matrix(1 0 0 1 0 0)" />
                                                        <path
                                                            d="M 46.112 21.338 c -0.027 -0.018 -0.057 -0.029 -0.084 -0.046 c -0.084 -0.051 -0.168 -0.1 -0.259 -0.138 c -0.038 -0.016 -0.079 -0.023 -0.118 -0.037 c -0.084 -0.029 -0.166 -0.06 -0.255 -0.077 C 45.266 21.014 45.134 21 45 21 s -0.266 0.014 -0.395 0.04 c -0.088 0.018 -0.171 0.049 -0.255 0.077 c -0.039 0.014 -0.08 0.021 -0.118 0.037 c -0.091 0.038 -0.176 0.088 -0.259 0.138 c -0.027 0.016 -0.058 0.028 -0.084 0.046 c -0.109 0.073 -0.211 0.156 -0.303 0.249 L 28.481 36.691 c -0.781 0.781 -0.781 2.047 0 2.828 c 0.781 0.781 2.047 0.781 2.828 0 L 43 27.828 L 43 67 c 0 1.104 0.896 2 2 2 s 2 -0.896 2 -2 l 0 -39.172 L 58.691 39.52 c 0.781 0.781 2.047 0.781 2.828 0 c 0.391 -0.391 0.586 -0.902 0.586 -1.414 s -0.195 -1.023 -0.586 -1.414 L 46.415 21.587 C 46.323 21.495 46.221 21.411 46.112 21.338 z"
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,163,137); fill-rule: nonzero; opacity: 1;"
                                                            transform=" matrix(1 0 0 1 0 0) "
                                                            stroke-linecap="round" />
                                                    </g>
                                                </svg>
                                                <h6 class="col-span-4">4% (30 days)</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- reservetion list,inventory list and customer riview< --}}
                            {{-- reservetion list --}}
                            <div
                                class=" md:grid md:items-center md:grid-cols-4 md:h-96 mt-8 md:mb-6 pb-10 md:grid-flow-col md:gap-6">
                                <div class=" rounded-2xl p-4  md:h-full bg-almond ">
                                    <div class="gird flex  grid-cols-2 w-full">
                                        <h1 class="w-3/4 text-md font-semibold">Reservation List</h1>
                                        <div id="view all"
                                            class="cursor-pointer text-xs justify-end gird w-3/4 my-auto flex grid-cols-2">
                                            <h6>View all</h6>
                                            <svg class="my-auto ms-2" width="10" height="10"
                                                viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.08398 1.8293L6.69102 1.22227C6.94805 0.965237 7.36367 0.965237 7.61797 1.22227L12.9336 6.53516C13.1906 6.79219 13.1906 7.20782 12.9336 7.46211L7.61797 12.7777C7.36094 13.0348 6.94531 13.0348 6.69102 12.7777L6.08398 12.1707C5.82422 11.9109 5.82969 11.4871 6.09492 11.2328L9.38984 8.09375H1.53125C1.16758 8.09375 0.875 7.80118 0.875 7.4375V6.5625C0.875 6.19883 1.16758 5.90625 1.53125 5.90625H9.38984L6.09492 2.76719C5.82695 2.51289 5.82148 2.08907 6.08398 1.8293Z"
                                                    fill="#5C5C5C" />
                                            </svg>
                                        </div>
                                    </div>
                                    <ul role="list" class="md:mt-6  w-full ">
                                        <li
                                            class="hidden justify-between border-b border-white 2xl:flex bg-bg-almond py-3">
                                            <div class="flex m-auto  ">
                                                <img class="h-10 w-10  m-auto rounded-full bg-gray-50"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                                <div class="m-auto mx-4">
                                                    <p class="text-sm font-semibold  text-gray-900">Leslie</p>
                                                    <p class=" text-xs text-gray-500">
                                                        Nasi Goreng </p>
                                                </div>
                                            </div>
                                            <div class="m-auto  bg-flame rounded-2xl opacity-50 px-4 py-0.5">
                                                <p class="my-auto text-xs font-semibold text-white"> <time
                                                        datetime="2023-01-23T13:23Z">3 hours ago</time></p>
                                            </div>
                                        </li>

                                        <li class="flex justify-between border-b border-white bg-bg-almond py-3">
                                            <div class="flex m-auto  ">
                                                <img class="h-10 w-10  m-auto rounded-full bg-gray-50"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                                <div class="m-auto mx-4">
                                                    <p class="text-sm font-semibold  text-gray-900">Leslie</p>
                                                    <p class=" text-xs text-gray-500">
                                                        Nasi Goreng </p>
                                                </div>
                                            </div>
                                            <div class="m-auto  bg-flame rounded-2xl opacity-50 px-4 py-0.5">
                                                <p class="my-auto text-xs font-semibold text-white"> <time
                                                        datetime="2023-01-23T13:23Z">3 hours ago</time></p>
                                            </div>
                                        </li>
                                        <li class="flex justify-between border-b border-white bg-bg-almond py-3">
                                            <div class="flex m-auto  ">
                                                <img class="h-10 w-10  m-auto rounded-full bg-gray-50"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                                <div class="m-auto mx-4">
                                                    <p class="text-sm font-semibold  text-gray-900">Leslie</p>
                                                    <p class=" text-xs text-gray-500">
                                                        Nasi Goreng </p>
                                                </div>
                                            </div>
                                            <div class="m-auto  bg-flame rounded-2xl opacity-50 px-4 py-0.5">
                                                <p class="my-auto text-xs font-semibold text-white"> <time
                                                        datetime="2023-01-23T13:23Z">3 hours ago</time></p>
                                            </div>
                                        </li>
                                        <li class="flex justify-between border-b border-white bg-bg-almond py-3">
                                            <div class="flex m-auto  ">
                                                <img class="h-10 w-10  m-auto rounded-full bg-gray-50"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                                <div class="m-auto mx-4">
                                                    <p class="text-sm font-semibold  text-gray-900">Leslie</p>
                                                    <p class=" text-xs text-gray-500">
                                                        Nasi Goreng </p>
                                                </div>
                                            </div>
                                            <div class="m-auto  bg-flame rounded-2xl opacity-50 px-4 py-0.5">
                                                <p class="my-auto text-xs font-semibold text-white"> <time
                                                        datetime="2023-01-23T13:23Z">3 hours ago</time></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                {{-- inventory list status --}}

                                <div
                                    class="my-4 md:my-0  col-span-3 h-full rounded-2xl p-4 bg-white drop-shadow-md transition duration-300 ease-in-out transform hover:drop-shadow">

                                    <div class="gird flex  grid-cols-2 w-full">
                                        <h1 class="w-3/4 text-md font-semibold">Inventory Status</h1>
                                        <div id="view all"
                                            class="cursor-pointer text-xs justify-end gird w-3/4 my-auto flex grid-cols-2">
                                            <a class="flex" href="{{ route('admin.products') }}">View All
                                                <svg class="my-auto ms-2" width="10" height="10"
                                                    viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 1.8293L6.69102 1.22227C6.94805 0.965237 7.36367 0.965237 7.61797 1.22227L12.9336 6.53516C13.1906 6.79219 13.1906 7.20782 12.9336 7.46211L7.61797 12.7777C7.36094 13.0348 6.94531 13.0348 6.69102 12.7777L6.08398 12.1707C5.82422 11.9109 5.82969 11.4871 6.09492 11.2328L9.38984 8.09375H1.53125C1.16758 8.09375 0.875 7.80118 0.875 7.4375V6.5625C0.875 6.19883 1.16758 5.90625 1.53125 5.90625H9.38984L6.09492 2.76719C5.82695 2.51289 5.82148 2.08907 6.08398 1.8293Z"
                                                        fill="#5C5C5C" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <ul role="list" class="mt-6 w-full ">
                                        @if ($lowestStockMenus->count() < 1)
                                            <div class="w-full  m-auto">
                                                <img src="{{ asset('images/NoProduct.svg') }}" alt=""
                                                    class="w-48  m-auto">
                                                <h1 class="w-full text-md font-bold text-center -mt-8">No Product</h1>
                                                <p class="text-xs text-center">Your product list is empty.
                                                    Please go to the product page to start adding products.</p>
                                            </div>
                                        @endif
                                        @foreach ($lowestStockMenus as $menu)
                                            <a href="{{ route('admin.products', ['search' => $menu->menu_name]) }}">
                                                <li
                                                    class="flex my-3 cursor-pointer rounded-xl px-3 w-full justify-between bg-white drop-shadow-md hover:drop-shadow transition duration-300 ease-in-out transform bg-bg-almond py-3">
                                                    <div class="flex   ">
                                                        <div class="h-24 w-28">
                                                            <img class="h-full w-full  rounded-md bg-gray-50"
                                                                src="{{ asset('images/nasgor-crt.png') }}"
                                                                alt="">

                                                        </div>
                                                        <div class="m-auto md:px-4 md:mx-4 px-1 mx-1"">
                                                            <p
                                                                class="text-sm w-full font-semibold md:text-md  text-junggleGreen">
                                                                {{ $menu->menu_name }}</p>
                                                            <p class=" text-xs md:text-sm  w-full text-tealGray">
                                                                {{ strlen($menu->menu_description) > 15 ? substr($menu->menu_description, 0, 15) . '............' : $menu->menu_description }}
                                                            </p>

                                                            <div
                                                                class=" w-28 mt-3 border-solid border-2 border-flame md:rounded-xl rounded-md  flex py-1 md:py-1.5">
                                                                <p class="m-auto text-xs font-bold text-flame">

                                                                    @if ($menu->menu_quantity < 1)
                                                                        Out of Stock
                                                                    @else
                                                                        {{ $menu->menu_quantity }} Porsi
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </a>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-HtmlPage>

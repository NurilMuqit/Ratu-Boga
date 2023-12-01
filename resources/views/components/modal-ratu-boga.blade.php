@props(['name', 'title'])
<div class="fixed flex items-center  justify-center z-50 inset-0" x-data="{ show: false, name: '{{ $name }}' }" x-show="show"
    x-on:open-modal.window ="show=($event.detail.name === name)" x-on:close-modal.window ="show= false"
    x-on:keydown.escape.window="show= false" style="display: none">



    <a href="{{ url(str_contains(request()->route()->uri, 'edit_menu') ? '/admin/products' : (str_contains(request()->route()->uri, 'edit_category') ? 'admin/products/category' : '#')) }}"
        x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </a>
    @if ($title == 'EditProduct' || $title == 'Add product')
        <div x-show="show"
            class="m-auto w-1/2 md:w-1/2 z-100 bg-white rounded-xl overflow-hidden shadow-xl transform transition-all"
            x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            {{-- {{ $body }} --}}

            <!-- modal-add-product -->
            <div class="h-14 w-full {{ $colorAlertModal }} ">

                <!-- modal-add-product -->
                <div class="flex justify-end h-full w-full">
                    <a href="{{ url(str_contains(request()->route()->uri, 'edit_menu') ? '/admin/products' : (str_contains(request()->route()->uri, 'edit_category') ? 'admin/products/category' : '#')) }}"
                        x-on:click="show = false" class="my-auto mx-4  hover:text-gray-800 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="white" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full">
                {{-- Warning Icon --}}
                <div
                    class="sa mx-auto scale-50 -mt-16 rounded-full  {{ $colorAlertModal == 'bg-warning' ? '' : 'hidden' }}">
                    <div class="sa-warning">
                        <div class="sa-warning-body"></div>
                        <div class="sa-warning-dot"></div>
                    </div>
                </div>
                @if (isset($title))
                    <div class="text-center hidden ">
                        <h3
                            class="font-bold text-junggleGreen {{ $colorAlertModal == 'bg-slateGreen' ? 'mt-4' : '-mt-8' }}  text-2xl">
                            {{ $title }}</h3>
                    </div>
                @endif
                <div class="w-full">
                    {{ $modalConten }}
                </div>
            </div>
        </div>
    @else
        <div x-show="show"
            class="sm:max-w-sm m-auto  route w-4/6 md:w-full z-100 bg-white rounded-xl overflow-hidden shadow-xl transform transition-all   "
            x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            {{-- {{ $body }} --}}

            <!-- modal-add-product -->
            <div class="h-14 w-full {{ $colorAlertModal }} ">

                <!-- modal-add-product -->
                <div class="flex justify-end h-full w-full">
                    <a href="{{ url(str_contains(request()->route()->uri, 'edit_menu') ? '/admin/products' : (str_contains(request()->route()->uri, 'edit_category') ? 'admin/products/category' : '#')) }}"
                        x-on:click="show = false" class="my-auto mx-4  hover:text-gray-800 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="white" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                {{-- Warning Icon --}}
                <div
                    class="sa mx-auto scale-50 -mt-16 rounded-full  {{ $colorAlertModal == 'bg-warning' ? '' : 'hidden' }}">
                    <div class="sa-warning">
                        <div class="sa-warning-body"></div>
                        <div class="sa-warning-dot"></div>
                    </div>
                </div>
                @if (isset($title))
                    <div class="text-center ">
                        <h3
                            class="font-bold text-junggleGreen {{ $colorAlertModal == 'bg-slateGreen' ? 'mt-4' : '-mt-8' }}  text-2xl">
                            {{ $title }}</h3>
                    </div>
                @endif
                <div class="px-5 py-2">
                    {{ $modalConten }}
                </div>
            </div>

        </div>
    @endif
</div>

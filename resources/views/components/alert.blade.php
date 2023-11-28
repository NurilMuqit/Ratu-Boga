<div class="fixed flex alertALL text-junggleGreen items-center justify-center z-50 inset-0" x-data="{ show: true }"
    x-show="show" x-init="setTimeout(() => { show = false; }, {{ $colorAlert == 'bg-flame' ? '90000' : '2000' }})" x-on:close-modal.window="show = false" x-on:keydown.escape.window="show = false">

    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show"
        class="sm:max-w-sm route w-4/6 md:w-full z-100  bg-white rounded-xl overflow-hidden shadow-xl transform transition-all"
        x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="h-16 w-full {{ $colorAlert }} ">

            <!-- modal-add-product -->
            <div class="flex justify-end h-full w-full">
                <button x-on:click="show = false" class="my-auto mx-4  hover:text-gray-800 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="white" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="text-center  m-auto">
            {{-- sukses --}}
            <div class="sa  mx-auto scale-50 -mt-16 rounded-full {{ $colorAlert == 'bg-success' ? '' : 'hidden' }}">
                <div class="sa-success">
                    <div class="sa-success-tip"></div>
                    <div class="sa-success-long"></div>
                    <div class="sa-success-placeholder"></div>
                    <div class="sa-success-fix"></div>
                </div>
            </div>
            {{-- error --}}
            <div class="sa  mx-auto scale-50 -mt-16 rounded-full {{ $colorAlert == 'bg-flame' ? '' : 'hidden' }}">
                <div class="sa-error">
                    <div class="sa-error-x">
                        <div class="sa-error-left"></div>
                        <div class="sa-error-right"></div>
                    </div>
                    <div class="sa-error-placeholder"></div>
                    <div class="sa-error-fix"></div>
                </div>
            </div>
            <p> {{ $AlertConten }}</p>
            <button x-on:click="show = false"
                class="my-4 mt-4 m-auto w-64 flex justify-center {{ $colorAlert == 'bg-success' ? 'bg-success' : 'bg-flame' }} text-white p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
                Oke
            </button>
        </div>

    </div>
</div>
</div>

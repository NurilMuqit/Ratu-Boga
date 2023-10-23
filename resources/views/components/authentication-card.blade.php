{{-- tanpa latar --}}
{{-- <div class="min-h-screen flex flex-col ">
    <div class="flex sm:justify-between">
        <!-- Bagian Kanan (Form) -->
        <div class="w-full sm:w-1/2 ">
            <div
                class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-almond">
                <div>
                    {{ $logo }}
                </div>

                <div class="w-full sm:max-w-md mt-2 px-6 py-2 bg-transparent overflow-hidden">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <!-- Bagian Kiri gambar -->
        <div class="sm:w-1/2 w-full relative hidden sm:block">
            <div class="absolute inset-0 z-10 bg-cover bg-center"
                style="background-image: url('{{ asset('images/latarlogin.jpg') }}');">
            </div>
        </div>
    </div>
</div> --}}

{{-- dengan latar --}}
<div class="font-PlusJakartaSans h-screen w-screen sm:overflow-hidden overflow-visible flex flex-col sm:flex-row bg-cover bg-center"
    style="background-image: url('{{ asset('images/latarlogin.jpg') }}');">

    <!-- Bagian Kiri gambar -->
    <div class="sm:w-1/2 w-full h-1/5 sm:h-full order-1 sm:order-2">
        <div class="w-full h-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/latarlogin.jpg') }}');">
        </div>
    </div>

    <!-- Bagian Kanan (Form) -->
    <div
        class="order-2 sm:order-1 rounded-t-3xl sm:rounded-none sm:w-1/2 w-full sm:h-screen h-4/5 sm:h-full  flex flex-col justify-center items-center pt-6 sm:pt-0 bg-almond ">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-2 px-6 py-2 bg-transparent overflow-hidden">
            {{ $slot }}
        </div>
    </div>


</div>

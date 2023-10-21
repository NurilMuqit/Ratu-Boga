<nav class="border-gray-200 bg-[#2A635C]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
            <img src="{{ asset("images/logo-white.png") }}" alt="" class="w-12 me-3">
            <span class="self-center PlayfairDisplay text-2xl font-semibold whitespace-nowrap dark:text-white">Ratu
                Boga</span>
        </a>
        <div class="flex md:order-2">
            <div class="py-2 content-center me-20">
                <a href="#" class="font-medium text-white text-base mr-0 md:mr-0 {{ request()->routeIs('home') ? 'border-b-4 border-[#E8512A] mx-1.5 py-2' : '' }}" style="margin-right: 2rem">Home</a>
                <a href="#" class="font-medium text-white text-base mr-3 md:mr-0 {{ request()->routeIs('menu') ? 'border-b-4 border-[#E8512A] mx-1.5 py-2' : '' }}" style="margin-right: 2rem">Menu</a>
            </div>
            <button type="button"
                class="text-white bg-transparent font-medium rounded-lg text-sm px-5 py-2 text-center me-5 md:me-0 ">
                LOGIN</button>
            <button type="button"
                class="text-white bg-[#E8512A] font-medium rounded-lg text-sm px-6 py-2 text-center me-3 md:me-0">
                SIGNUP</button>
        </div>
    </div>
</nav>
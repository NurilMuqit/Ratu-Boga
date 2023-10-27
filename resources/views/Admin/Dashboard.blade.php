{{-- <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <x-application-logo class="block h-12 w-auto" />

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Ini Dashboard Admin Sementara
                    </h1>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div></div>

                </div>
            </div>
        </div>

        <div class="name ">
          <div class="list-item">
              <x-app-layout>
            </x-app-layout>
          </div>
        </div>

        <div class="position m-2">
          <div class="list-item">
              <span class="admin-position flex justify-center text-white text-base font-normal" id="admin_position" >Admin Restaurant</span>
          </div>
        </div>
          <ul class="list ">
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-bar-chart-fill"></i>Dashboard</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-cart2"></i>Poducts</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-bag"></i>Orders</a><span class="notification rounded-pill text-light py-0 px-1">02</span></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-person-lines-fill"></i>Customers</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-credit-card"></i>Finance</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-gear"></i>Settings</a></li>
          </ul>
      </div>

      <div class="main-content">

      </div>
    </div>
</x-app-layout> --}}
<x-HtmlPage>
    <div class="p-2 w-screen h-screen ">
        <div class="h-full w-full">
            <div class="h-full overflow-hidden  shadow-xl sm:rounded-lg">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>

                    <div class="w-10/12 px-8 ml-2 bg-white rounded-lg text-junggleGreen">
                        <header class=" py-10  place-items-center grid grid-cols-2  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full ">
                                <h1 class="font-PlayfairDisplay  text-4xl text-gray-900">
                                    Dashboard
                                </h1>
                                <p>Hi, {{ explode(' ', Auth::user()->name)[0] }} Welcome back to Ratu Boga Admin!</p>

                            </div>

                            <div class="flex justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </div>


                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="grid items-center  grid-cols-2 ">
                                <h3 class="font-bold text-flame">Sales Summary</h3>
                                <div class="flex justify-end">
                                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-10">
                                </div>
                            </div>

                        </main>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-HtmlPage>

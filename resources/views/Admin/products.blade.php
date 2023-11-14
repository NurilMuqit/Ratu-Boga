<x-HtmlPage>
    <div class="p-2 w-screen h-screen ">
        <div class="h-full w-full">
            <div class="h-full overflow-hidden shadow-xl sm:rounded-lg">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>
                    <div class="w-10/12 ml-2 bg-white rounded-lg font-PlayfairDisplay text-junggleGreen">
                        <div class=" pl-8 bg-white  rounded-lg">
                            <h1 class=" mt-8 text-4xl text-gray-900">
                                Product
                            </h1>
                            <div class="route">
                                <span class="product">
                                    Products
                                </span>
                                <span class="category">
                                    Category
                                </span>

                                </div>
                            </div>
                            <div class="create m-8 text-xl">
                                <a class="product" href="{{ url('/menus') }}">
                                    Create Product
                                </a>
                                <a class="product text-flame" href="{{url('/category')}}">
                                    Create Category
                                </a>
                            </div>

                        <div class="mt-5 ml-2 grid gap-4 grid-cols-3 grid-rows-3 ">

                            @foreach ($menus as $menus)
                            <div class="menu w-96 h-40 bg-slateGreen rounded-lg flex text-almond">   
                                <img class="rounded-full w-32 h-32 bg-white m-4" src="/menu/{{ $menus->image }}" alt="">                    
                                <div class="text ml-1 mt-3 ">
                                <span class="text-xl font-bold">{{ $menus->menu_name }}</span>
                                <p class="break-all mt-2 text-xs">{{ $menus->menu_description }}</p>

                                    <div class="text-sm font-bold flex gap-2 mt-3">
                                    <p>total product: {{ $menus->menu_quantity }}</p>
                                    <p>price: {{ $menus->menu_price }}</p>     
                                    </div>
                                  
                                    <div class="mt-3 gap-6 flex">
                                    <a class="px-5 py-1 rounded-md bg-flame text-white text-sm"  href="">
                                        Edit
                                    </a>
                                    <a class="px-5 py-1 rounded-md text-sm text-white bg-red-700"  href="">
                                        Delete
                                    </a>
                                    </div>
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
</x-HtmlPage>

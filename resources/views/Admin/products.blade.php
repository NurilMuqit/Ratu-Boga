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
                        <div class="menus mt-5 ml-2">
                            <h1>Hello World</h1>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>

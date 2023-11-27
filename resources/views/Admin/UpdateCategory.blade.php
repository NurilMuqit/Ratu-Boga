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
                                <a class="product" href="">
                                    Products
                                </a>
                                <a class="product text-flame" href="">
                                    Category
                                </a>

                                @if (session()->has('success'))
                                    <div class="">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                <form action="{{ url('/edit_category_confirm',$data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div class="update_menu mt-5">
                                            <h1>update category name</h1>
                                            <input type="text" name="category" placeholder="Write Category Name"
                                                required="" value="{{ $data->category }}">
                                        </div>
                                        
                                        <button type="submit" class="px-4 py-2 bg-flame text-white rounded-full ml-3"
                                            value="Update">
                                            Update
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>
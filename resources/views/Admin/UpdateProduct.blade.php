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

                                <form action="{{ url('/edit_menu_confirm',$menu->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div class="update_menu mt-5">
                                            <h1>update menu name</h1>
                                            <input type="text" name="menu_name" placeholder="Write Menu Name"
                                                required="" value="{{ $menu->menu_name }}">
                                        </div>

                                        <div class="update_desc mt-5">
                                            <h1>update desc menu</h1>
                                            <textarea type="text" name="menu_description" placeholder="Write Menu desc" >{{ $menu->menu_description }}</textarea>
                                        </div>

                                        <div class="update_quantity mt-5">
                                            <h1>update quantity menu</h1>
                                            <input type="number" name="menu_quantity" min="0"
                                                placeholder="Write Menu quantity" value="{{ $menu->menu_quantity }}">
                                        </div>

                                        <div class="update_price mt-5">
                                            <h1>update price menu</h1>
                                            <input type="number" name="menu_price" placeholder="Write Menu price" min="0"
                                                required="" value="{{ $menu->menu_price }}">
                                        </div>

                                        <div class="update_category mt-5">
                                            <h1>update category menu</h1>

                                            <select class="" name="category_id" id="">
                                                @foreach ($data as $data)
                                                    <option value="{{ $data->id }}">
                                                        {{ $data->category }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="image_past flex">
                                            <label for="">Current Image</label>
                                            <img class="w-10 h-10" src="/menu/{{ $menu->image }}" alt="">
                                        </div>

                                        <div class="update_image mt-5">
                                            <h1>update image menu</h1>
                                            <input type="file" name="image"
                                                class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-black
                                            hover:file:bg-violet-100">
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

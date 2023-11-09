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
                                {{-- @if (session()->has('message'))
                                <div class="alert alert-success">

                                    {{ session()->get('message') }}
                                </div>
                                    
                                @endif --}}
                                <div class="add_category mt-5">
                                    <h1>add Category</h1>

                                    <form action="{{ url('/store') }}" method="POST">

                                        
                                        <input type="text" name="category" placeholder="Write Category Name">
                                        <button type="submit" class="px-4 py-2 bg-flame text-white rounded-full ml-3" value="Add">
                                            Add
                                        </button>
                                    </form>

                                </div>

                                <table >
                                    <tr class="grid gap-5 grid-cols-7 text-center">
                                        <td>Menu Name</td>
                                        <td>Description</td>
                                        <td>price</td>
                                        <td>category_id</td>
                                        <td>quantity</td>
                                        <td>Update</td>
                                        <td>Delete</td>
                                    </tr>

                                   
                                        
                                    <tr class="grid gap-5 grid-cols-7 text-center">
                                        <td>asemeleh</td>   
                                        <td>ws</td>
                                        <td>dsds</td>
                                        <td>dssdds</td>
                                        <td>dssdds</td>
                                        <td >
                                            <a class="px-2 py-0 rounded-md text-white bg-slateGreen" href="">
                                                Update
                                            </a>
                                        </td>
                                        <td>
                                            <a onclick="return confirm('Are You Sure Want to Delete This?')" class="px-2 py-0 rounded-md bg-flame text-white"  href="">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>

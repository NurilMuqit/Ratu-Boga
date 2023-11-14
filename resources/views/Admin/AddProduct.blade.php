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

                                <form action="{{ url('/add_menu') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div>
                                    <div class="add_menu mt-5">
                                        <h1>add menu name</h1>
                                            <input type="text" name="menu_name" placeholder="Write Menu Name" required="">                               
                                    </div>
    
                                    <div class="add_desc mt-5">
                                        <h1>add desc menu</h1>                                   
                                            <textarea type="text" name="menu_description" placeholder="Write Menu desc"></textarea>                                  
                                    </div> 
                                    
                                    <div class="add_quantity mt-5">
                                        <h1>add quantity menu</h1>                             
                                            <input type="number" name="menu_quantity" placeholder="Write Menu quantity">                                   
                                    </div>
    
                                    <div class="add_price mt-5">
                                        <h1>add price menu</h1>                             
                                            <input type="number" name="menu_price" placeholder="Write Menu price" required="">                                    
                                    </div>
    
                                    <div class="add_category mt-5">
                                        <h1>add category menu</h1>
    
                                        <select class="" name="category_id" id="">
                                            @foreach ($data as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->category }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
    
                                    <div class="add_image mt-5">
                                        <h1>add image menu</h1>                                
                                            <input type="file" name="image" class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-black
                                            hover:file:bg-violet-100">                                                                                                              
                                    </div>
                                    <button type="submit" class="px-4 py-2 bg-flame text-white rounded-full ml-3" value="Add">
                                        Add
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

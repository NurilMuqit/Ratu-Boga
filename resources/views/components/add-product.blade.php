   @props(['data'])

   <form class="mt-2 text-junggleGreen space-y-1" action="{{ url('/add_menu') }}" enctype="multipart/form-data"
       method="POST">
       @csrf
       <div class="grid add_menu grid-cols-1 space-y-1">
           <label class="text-sm font-bold  tracking-wide">Name</label>
           <input class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
               type="text" name="menu_name" placeholder="Write Menu Name" required="">
       </div>
       <div class="grid add_desc grid-cols-1 space-y-1">
           <label class="text-sm font-bold  tracking-wide">Description</label>
           <textarea class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
               type="text" name="menu_description" placeholder="Write Menu desc"></textarea>
       </div>
       <div class="grid add_quantity grid-cols-1 space-y-1">
           <label class="text-sm font-bold  tracking-wide">Quantity
           </label>
           <input class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
               type="number" name="menu_quantity" placeholder="Write Menu quantity" min="0">
       </div>
       <div class="grid add_price grid-cols-1 space-y-1">
           <label class="text-sm font-bold  tracking-wide">Price</label>
           <input type="number"
               class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
               name="menu_price" placeholder="Write Menu price" required="" min="0">
       </div>
       <div class="grid grid-cols-1 add_category space-y-2">
           <label class="text-sm font-bold  tracking-wide">Category
           </label>
           <select class="text-sm p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
               name="category_id" id="">
               @foreach ($data as $item)
                   <option value="{{ $item->id }}">
                       {{ $item->category }}</option>
               @endforeach

           </select>
       </div>
       <div class="space-y-2">
           <label class="text-sm font-bold  tracking-wide">Upload Image
           </label>
           <div class="flex items-center justify-center cursor-pointer  h-14  w-full">
               <label
                   class="add_image flex flex-col cursor-pointer  rounded-lg border-2 border-dashed w-full  text-center">
                   <input type="file" name="image"
                       class="block w-full cursor-pointer  h-full text-sm text-slate-500
                                             file:py-3 file:px-2
                                             file:border-0
                                            file:text-sm file:font-sm
                                            file:bg-violet-50
                                            hover:file:bg-violet-100">
               </label>

           </div>
       </div>
       <p class="text-xs text-gray-300">
           <span>File type: jpg,png,jpeg,gif types of images | max:2048 </span>
       </p>
       <div>
           <button type="submit" value="Add"
               class="my-2 w-full flex justify-center bg-slateGreen text-white p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
               Add
           </button>
       </div>
   </form>

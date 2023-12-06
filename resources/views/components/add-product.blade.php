   @props(['data'])

   <form class="mt-2 text-junggleGreen space-y-1" action="{{ url('/add_menu') }}" enctype="multipart/form-data"
       method="POST">
       @csrf
       <div class="w-full grid grid-cols-2 p-8">
           <div class=" text-junggleGreen pr-8 space-y-1">
               <div class="grid add_menu grid-cols-1 space-y-1">
                   <label class="text-sm font-bold  tracking-wide">Name</label>
                   <input class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-flame"
                       type="text" name="menu_name" placeholder="Write Menu Name" required="">
               </div>
               <div class="grid add_desc grid-cols-1 space-y-1">
                   <label class="text-sm font-bold  tracking-wide">Description</label>
                   <textarea class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-flame" type="text"
                       name="menu_description" placeholder="Write Menu desc"></textarea>
               </div>
               <div class="grid add_quantity grid-cols-1 space-y-1">
                   <label class="text-sm font-bold  tracking-wide">Quantity
                   </label>
                   <input class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-flame"
                       type="number" name="menu_quantity" placeholder="Write Menu quantity" min="0">
               </div>
               <div class="grid add_price grid-cols-1 space-y-1">
                   <label class="text-sm font-bold  tracking-wide">Price</label>
                   <input type="number"
                       class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-flame"
                       name="menu_price" placeholder="Write Menu price" required="" min="0">
               </div>
               <div class="grid grid-cols-1 add_category space-y-2">
                   <label class="text-sm font-bold  tracking-wide">Category
                   </label>
                   <select class="text-sm p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-flame"
                       name="category_id" id="">
                       @foreach ($data as $item)
                           <option value="{{ $item->id }}">
                               {{ $item->category }}</option>
                       @endforeach

                   </select>
               </div>
               <div>
                   <button type="submit" value="Add"
                       class="mt-8 w-full flex justify-center bg-slateGreen text-white p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
                       Add
                   </button>
               </div>
           </div>

           {{-- /image --}}
           <div class="w-full rounded-xl " style="height: 28rem  ">
               <div id="cardimage"
                   class="rounded-xl group border-dashed border-2 border-junggleGreen image_past w-full h-full relative">
                   <img id="menuImage2" class="rounded-xl border-solid border-flame w-full h-full object-cover"
                       src="{{ asset('#') }}">
                   <div id="fileInput"
                       class=" text-white rounded-xl  transition-all duration-500 transform scale-y-0 origin-bottom group-hover:bg-opacity-75 group-hover:scale-y-100  absolute inset-0 w-full h-full bg-opacity-0 flex flex-wrap items-center justify-center cursor-pointer bg-black">
                       <div class="w-full text-center">
                           <svg width="69" height="60" viewBox="0 0 69 60" fill="none" class="m-auto"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                   d="M36.1366 14.7458L36.2288 14.7733L36.2328 14.7688C36.6705 14.8481 37.1047 14.586 37.2332 14.1519C38.4049 10.2152 42.096 7.46504 46.2084 7.46504C46.6953 7.46504 47.0901 7.07016 47.0901 6.5833C47.0901 6.09643 46.6952 5.70156 46.2084 5.70156C41.1542 5.70156 36.9071 9.06665 35.5433 13.6493C35.4042 14.1162 35.6701 14.6067 36.1366 14.7458Z"
                                   fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.3" />
                               <path
                                   d="M56.4523 42.4384H52.062C51.658 42.4384 51.3302 42.1107 51.3302 41.7067C51.3302 41.3027 51.6579 40.9749 52.062 40.9749H56.4523C62.5042 40.9749 67.4283 36.0509 67.4283 29.999C67.4283 23.9471 62.5042 19.023 56.4523 19.023H56.3467C56.1345 19.023 55.9328 18.9311 55.7937 18.7706C55.6547 18.6101 55.592 18.3974 55.6223 18.1873C55.6877 17.7315 55.7206 17.2737 55.7206 16.8279C55.7206 11.5829 51.4529 7.31531 46.208 7.31531C44.1675 7.31531 42.2216 7.95296 40.5804 9.15978C40.2198 9.42478 39.7076 9.30718 39.499 8.91047C34.851 0.0596993 22.7108 -1.12887 16.4168 6.57053C13.7653 9.81417 12.7236 14.0336 13.5583 18.146C13.6503 18.6002 13.3028 19.0236 12.8412 19.0236H12.548C6.49615 19.0236 1.57208 23.9477 1.57208 29.9996C1.57208 36.0514 6.49615 40.9755 12.548 40.9755H16.9384C17.3424 40.9755 17.6701 41.3032 17.6701 41.7072C17.6701 42.1113 17.3424 42.439 16.9384 42.439H12.548C5.68905 42.439 0.108551 36.8585 0.108551 29.9995C0.108551 23.3329 5.3801 17.8742 11.9736 17.5731C11.3543 13.3066 12.5386 9.00295 15.2836 5.64437C22.0223 -2.5996 34.9365 -1.67556 40.3957 7.51707C42.1372 6.42522 44.1301 5.85244 46.2078 5.85244C52.5623 5.85244 57.5977 11.261 57.1571 17.58C63.6899 17.9463 68.8915 23.3763 68.8915 29.999C68.8915 36.8585 63.311 42.4384 56.452 42.4384L56.4523 42.4384Z"
                                   fill="#FFFFFF" />
                               <path
                                   d="M15.9586 41.2935C15.9586 51.4634 24.2322 59.737 34.402 59.737C44.572 59.737 52.8455 51.4633 52.8455 41.2935C52.8455 31.1235 44.572 22.85 34.402 22.85C24.2321 22.85 15.9586 31.1237 15.9586 41.2935ZM17.7224 41.2935C17.7224 32.0966 25.205 24.6138 34.402 24.6138C43.5989 24.6138 51.0817 32.0964 51.0817 41.2935C51.0817 50.4904 43.5989 57.9732 34.402 57.9732C25.2051 57.9732 17.7224 50.4905 17.7224 41.2935Z"
                                   fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.3" />
                               <path
                                   d="M34.0513 48.6577C34.0513 49.0363 34.3584 49.3434 34.737 49.3434C35.1156 49.3434 35.4227 49.0367 35.4227 48.6577V34.7291C35.4227 34.3504 35.1157 34.0434 34.737 34.0434C34.3584 34.0434 34.0513 34.3504 34.0513 34.7291V48.6577Z"
                                   fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.3" />
                               <path
                                   d="M34.7367 35.7002L30.936 39.5008L34.7367 35.7002ZM34.7367 35.7002L38.5374 39.5009C38.6711 39.6347 38.8472 39.7018 39.0223 39.7018L34.7367 35.7002ZM29.9661 39.5009C30.2339 39.7687 30.6683 39.7689 30.9359 39.5009L39.0223 39.7018C39.1971 39.7018 39.3733 39.6352 39.5072 39.5009C39.7751 39.233 39.775 38.799 39.5072 38.5312L35.2215 34.2455C34.9537 33.9777 34.5193 33.9776 34.2517 34.2455C34.2517 34.2456 34.2517 34.2456 34.2517 34.2456L29.9661 38.5312C29.6982 38.799 29.6982 39.2331 29.9661 39.5009Z"
                                   fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.3" />
                           </svg>
                           <h1 class="mt-2 font-bold">Drag & Drop</h1>
                           <p class="opacity-75">or select files from device</p>
                       </div>
                       <p class="absolute bottom-0 w-full text-center left-0 opacity-50 mb-3 text-xs">File type: jpg,
                           png,
                           jpeg types of
                           images | max: 2048</p>
                   </div>
                   <div id="Noinput"
                       class=" text-junggleGreen rounded-xl   absolute inset-0 w-full h-full  flex flex-wrap items-center justify-center cursor-pointer bg-white">
                       <div class="w-full text-center text-junggleGreen">
                           <svg width="69" height="60" viewBox="0 0 69 60" fill="none" class="m-auto"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                   d="M36.1366 14.7458L36.2288 14.7733L36.2328 14.7688C36.6705 14.8481 37.1047 14.586 37.2332 14.1519C38.4049 10.2152 42.096 7.46504 46.2084 7.46504C46.6953 7.46504 47.0901 7.07016 47.0901 6.5833C47.0901 6.09643 46.6952 5.70156 46.2084 5.70156C41.1542 5.70156 36.9071 9.06665 35.5433 13.6493C35.4042 14.1162 35.6701 14.6067 36.1366 14.7458Z"
                                   fill="#2A635C" stroke="#2A635C" stroke-width="0.3" />
                               <path
                                   d="M56.4523 42.4384H52.062C51.658 42.4384 51.3302 42.1107 51.3302 41.7067C51.3302 41.3027 51.6579 40.9749 52.062 40.9749H56.4523C62.5042 40.9749 67.4283 36.0509 67.4283 29.999C67.4283 23.9471 62.5042 19.023 56.4523 19.023H56.3467C56.1345 19.023 55.9328 18.9311 55.7937 18.7706C55.6547 18.6101 55.592 18.3974 55.6223 18.1873C55.6877 17.7315 55.7206 17.2737 55.7206 16.8279C55.7206 11.5829 51.4529 7.31531 46.208 7.31531C44.1675 7.31531 42.2216 7.95296 40.5804 9.15978C40.2198 9.42478 39.7076 9.30718 39.499 8.91047C34.851 0.0596993 22.7108 -1.12887 16.4168 6.57053C13.7653 9.81417 12.7236 14.0336 13.5583 18.146C13.6503 18.6002 13.3028 19.0236 12.8412 19.0236H12.548C6.49615 19.0236 1.57208 23.9477 1.57208 29.9996C1.57208 36.0514 6.49615 40.9755 12.548 40.9755H16.9384C17.3424 40.9755 17.6701 41.3032 17.6701 41.7072C17.6701 42.1113 17.3424 42.439 16.9384 42.439H12.548C5.68905 42.439 0.108551 36.8585 0.108551 29.9995C0.108551 23.3329 5.3801 17.8742 11.9736 17.5731C11.3543 13.3066 12.5386 9.00295 15.2836 5.64437C22.0223 -2.5996 34.9365 -1.67556 40.3957 7.51707C42.1372 6.42522 44.1301 5.85244 46.2078 5.85244C52.5623 5.85244 57.5977 11.261 57.1571 17.58C63.6899 17.9463 68.8915 23.3763 68.8915 29.999C68.8915 36.8585 63.311 42.4384 56.452 42.4384L56.4523 42.4384Z"
                                   fill="#2A635C" />
                               <path
                                   d="M15.9586 41.2935C15.9586 51.4634 24.2322 59.737 34.402 59.737C44.572 59.737 52.8455 51.4633 52.8455 41.2935C52.8455 31.1235 44.572 22.85 34.402 22.85C24.2321 22.85 15.9586 31.1237 15.9586 41.2935ZM17.7224 41.2935C17.7224 32.0966 25.205 24.6138 34.402 24.6138C43.5989 24.6138 51.0817 32.0964 51.0817 41.2935C51.0817 50.4904 43.5989 57.9732 34.402 57.9732C25.2051 57.9732 17.7224 50.4905 17.7224 41.2935Z"
                                   fill="#2A635C" stroke="#2A635C" stroke-width="0.3" />
                               <path
                                   d="M34.0513 48.6577C34.0513 49.0363 34.3584 49.3434 34.737 49.3434C35.1156 49.3434 35.4227 49.0367 35.4227 48.6577V34.7291C35.4227 34.3504 35.1157 34.0434 34.737 34.0434C34.3584 34.0434 34.0513 34.3504 34.0513 34.7291V48.6577Z"
                                   fill="#2A635C" stroke="#2A635C" stroke-width="0.3" />
                               <path
                                   d="M34.7367 35.7002L30.936 39.5008L34.7367 35.7002ZM34.7367 35.7002L38.5374 39.5009C38.6711 39.6347 38.8472 39.7018 39.0223 39.7018L34.7367 35.7002ZM29.9661 39.5009C30.2339 39.7687 30.6683 39.7689 30.9359 39.5009L39.0223 39.7018C39.1971 39.7018 39.3733 39.6352 39.5072 39.5009C39.7751 39.233 39.775 38.799 39.5072 38.5312L35.2215 34.2455C34.9537 33.9777 34.5193 33.9776 34.2517 34.2455C34.2517 34.2456 34.2517 34.2456 34.2517 34.2456L29.9661 38.5312C29.6982 38.799 29.6982 39.2331 29.9661 39.5009Z"
                                   fill="#2A635C" stroke="#2A635C" stroke-width="0.3" />
                           </svg>
                           <h1 class="mt-2 font-bold">Drag & Drop</h1>
                           <p class="opacity-75">or select files from device</p>
                       </div>
                       <p class="absolute bottom-0 w-full text-center left-0 opacity-50 mb-3 text-xs">File type: jpg,
                           png,
                           jpeg types of
                           images | max: 2048</p>
                   </div>

                   <input id="imageInput2" type="file" name="image"
                       class="hover:absolute absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                       onchange="previewImage2()">
               </div>
               <script>
                   function previewImage2() {
                       var input = document.getElementById('imageInput2');
                       var image = document.getElementById('menuImage2');
                       var file = input.files[0];
                       var noInputDiv = document.getElementById('Noinput');
                       var fileInputDiv = document.getElementById('fileInput');
                       var cardimage = document.getElementById('cardimage')

                       noInputDiv.style.display = 'none';
                       fileInputDiv.style.display = 'flex';
                       cardimage.classList.remove('border-dashed');

                       if (file) {
                           var reader = new FileReader();

                           reader.onload = function(e) {
                               image.src = e.target.result;
                           };

                           reader.readAsDataURL(file);

                       }
                   }
               </script>

           </div>
       </div>
   </form>

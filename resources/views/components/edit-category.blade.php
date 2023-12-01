    @props(['data'])
    <div class="mt-2">
        <form action="{{ url('/edit_category_confirm', $data->id) }}" method="post">
            @csrf
            <div class="grid add_category grid-cols-1 space-y-1">
                <label class="text-sm font-bold  tracking-wide">Name</label>
                <input class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-flame"
                    type="text" name="category" id="category" value="{{ $data->category }}" required>
            </div>
            <div>
                <button type="submit"
                    class="my-2 w-full flex justify-center bg-slateGreen text-white p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
                    Update Category
                </button>
            </div>
        </form>
    </div>

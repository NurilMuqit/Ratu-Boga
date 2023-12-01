<form class="mt-2 space-y-1" action="{{ url('/store') }}" method="POST">
    @csrf
    <div class="grid add_category grid-cols-1 space-y-1">
        <label class="text-sm font-bold  tracking-wide">Name</label>
        <input class="text-sm p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-flame" type="text"
            name="category" placeholder="Write Category Name" required="">
    </div>
    <div>
        <button type="submit" value="Add"
            class="my-2 w-full flex justify-center bg-slateGreen text-white p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
            Add
        </button>
    </div>
</form>

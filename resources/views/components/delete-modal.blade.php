<div>
    <div class="modal-content w-full text-junggleGreen text-center">

        <p>Are you sure to delete this {{ $item }}?</p>

        <div class=" grid grid-cols-2 my-2 gap-2">
            <button onclick="confirmDeletion(true)"
                class="my-2 2/5 flex justify-center bg-junggleGreen text-white p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
                Yes
            </button>
            <button x-on:click="show = false" onclick="confirmDeletion(false)"
                class="my-2 2/5 flex justify-center bg-warning  p-2 rounded-md tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-transparent hover:text-junggleGreen shadow-lg cursor-pointer transition ease-in duration-300">
                No
            </button>
        </div>
    </div>
</div>

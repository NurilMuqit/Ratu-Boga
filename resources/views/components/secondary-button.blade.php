<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'hover:bg-opacity-100  bg-black text-white bg-opacity-50    focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150']) }}>
    <div class="m-auto flex justify-center">
        <svg width="24" height="24" class="mx-2" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M8.0625 8.18647L12 4.25L15.9375 8.18647" stroke="white" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M12 14.75V4.25276" stroke="white" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path
                d="M20.25 14.75V20C20.25 20.1989 20.171 20.3897 20.0303 20.5303C19.8897 20.671 19.6989 20.75 19.5 20.75H4.5C4.30109 20.75 4.11032 20.671 3.96967 20.5303C3.82902 20.3897 3.75 20.1989 3.75 20V14.75"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        {{ $slot }}

    </div>

</button>

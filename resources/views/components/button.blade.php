<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'hover:bg-opacity-75 font-semibold inline-flex items-center px-4 py-2 bg-flame border border-transparent rounded-md text-sm text-white tracking-widest focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

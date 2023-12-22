<div
    class="flex   flex-col items-center w-full h-full overflow-hidden text-white bg-slateGreen rounded-xl md:rounded-2xl">
    {{-- navbar-header --}}
    <div class="flex flex-col items-center w-full py-3">
        <a class="flex items-center w-14 md:w-full py-5" href="{{ route('admin.Profile') }}">
            {!! Auth::user()->profile_photo_url
                ? '<img src="' .
                    Auth::user()->profile_photo_url .
                    '" alt="' .
                    Auth::user()->name .
                    '" alt="Profil Picture" class="mx-auto rounded-full bg-white md:w-24 md:h-24 h-12 w-12 object-cover">'
                : '<div class="mx-auto rounded-full bg-white w-24 h-24 flex items-center justify-center text-2xl text-gray-500">{{ substr(Auth::user()->name, 0, 1) }}</div>' !!}
        </a>

        <h3 class="mb-2 md:text-2xl text-sm text-center font-bold ">
            {{ implode(' ', array_slice(explode(' ', Auth::user()->name), 0, 2)) }}</h3>
        <h4 class=" md:text-sm text-xs text-center">Admin restaurant</h4>

    </div>
    {{-- navbar-menu --}}
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 ">
            {{-- Dasboard --}}
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded-md hover:bg-flame transition duration-500 ease-in-out transform {{ request()->routeIs('admin.dashboard') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-flame' : '' }}"
                href="{{ route('admin.dashboard') }}">
                <svg class="w-6 md:mt-1 mt-2 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M0.168091 1.80001C0.168091 1.48175 0.294519 1.17652 0.519563 0.951478C0.744606 0.726434 1.04983 0.600006 1.36809 0.600006H15.7681C16.0863 0.600006 16.3916 0.726434 16.6166 0.951478C16.8417 1.17652 16.9681 1.48175 16.9681 1.80001V4.20001C16.9681 4.51827 16.8417 4.82349 16.6166 5.04853C16.3916 5.27358 16.0863 5.40001 15.7681 5.40001H1.36809C1.04983 5.40001 0.744606 5.27358 0.519563 5.04853C0.294519 4.82349 0.168091 4.51827 0.168091 4.20001V1.80001ZM0.168091 9.00001C0.168091 8.68175 0.294519 8.37652 0.519563 8.15148C0.744606 7.92643 1.04983 7.80001 1.36809 7.80001H8.56809C8.88635 7.80001 9.19157 7.92643 9.41662 8.15148C9.64166 8.37652 9.76809 8.68175 9.76809 9.00001V16.2C9.76809 16.5183 9.64166 16.8235 9.41662 17.0485C9.19157 17.2736 8.88635 17.4 8.56809 17.4H1.36809C1.04983 17.4 0.744606 17.2736 0.519563 17.0485C0.294519 16.8235 0.168091 16.5183 0.168091 16.2V9.00001ZM13.3681 7.80001C13.0498 7.80001 12.7446 7.92643 12.5196 8.15148C12.2945 8.37652 12.1681 8.68175 12.1681 9.00001V16.2C12.1681 16.5183 12.2945 16.8235 12.5196 17.0485C12.7446 17.2736 13.0498 17.4 13.3681 17.4H15.7681C16.0863 17.4 16.3916 17.2736 16.6166 17.0485C16.8417 16.8235 16.9681 16.5183 16.9681 16.2V9.00001C16.9681 8.68175 16.8417 8.37652 16.6166 8.15148C16.3916 7.92643 16.0863 7.80001 15.7681 7.80001H13.3681Z"
                        fill="white" />
                </svg>
                <span class="ml-2 md:flex hidden w-5/6 text-sm font-medium">Dasboard</span>

                <span
                    class="text-md  font-bold {{ request()->routeIs('admin.dashboard') || !str_contains(request()->route()->uri, 'admin') ? 'visible' : 'hidden' }}">|</span>

            </a>
            {{-- Products --}}
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded-md hover:bg-flame transition duration-500 ease-in-out transform {{ request()->routeIs('admin.products') || str_contains(request()->route()->uri, 'edit_menu') || str_contains(request()->route()->uri, 'category') ? 'bg-flame' : '' }} "
                href="{{ route('admin.products') }}">
                <svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <g clip-path="url(#clip0_103_1143)">
                        <path
                            d="M6.9847 22.0006C7.99722 22.0006 8.81803 21.1798 8.81803 20.1673C8.81803 19.1547 7.99722 18.3339 6.9847 18.3339C5.97218 18.3339 5.15137 19.1547 5.15137 20.1673C5.15137 21.1798 5.97218 22.0006 6.9847 22.0006Z"
                            fill="white" />
                        <path
                            d="M16.1514 22.0006C17.164 22.0006 17.9848 21.1798 17.9848 20.1673C17.9848 19.1547 17.164 18.3339 16.1514 18.3339C15.1389 18.3339 14.3181 19.1547 14.3181 20.1673C14.3181 21.1798 15.1389 22.0006 16.1514 22.0006Z"
                            fill="white" />
                        <path
                            d="M21.6368 5.5165C20.9915 4.89949 20.1277 4.56385 19.2351 4.58333H5.75095L5.50987 2.69317C5.42232 1.9513 5.06563 1.26734 4.5074 0.770951C3.94917 0.274559 3.22821 0.000240054 2.4812 0L1.94312 0C1.57844 0 1.22871 0.144866 0.970843 0.402728C0.712981 0.660591 0.568115 1.01033 0.568115 1.375H0.568115C0.568115 1.73967 0.712981 2.08941 0.970843 2.34727C1.22871 2.60513 1.57844 2.75 1.94312 2.75H2.4812C2.55619 2.7508 2.62822 2.77935 2.68341 2.83013C2.73859 2.88092 2.77301 2.95034 2.78003 3.025L4.15503 13.8041C4.24176 14.5465 4.59812 15.2313 5.15646 15.7283C5.7148 16.2252 6.43621 16.4999 7.1837 16.5H16.4622C17.5659 16.4994 18.6389 16.1365 19.5166 15.4672C20.3942 14.7979 21.0279 13.8591 21.3205 12.7948L22.4627 8.64142C22.615 8.09413 22.6187 7.51616 22.4735 6.96695C22.3284 6.41773 22.0396 5.91709 21.6368 5.5165ZM18.6723 12.0661C18.5381 12.5495 18.2494 12.9757 17.8504 13.2797C17.4514 13.5837 16.9639 13.7489 16.4622 13.75H7.1837C7.10875 13.7494 7.03671 13.7209 6.98163 13.67C6.92656 13.6192 6.89239 13.5497 6.88578 13.475L6.10203 7.33333H19.3726C19.4434 7.3328 19.5134 7.34868 19.577 7.37973C19.6406 7.41077 19.6962 7.45613 19.7394 7.51226C19.7825 7.56838 19.8121 7.63375 19.8258 7.70322C19.8394 7.77269 19.8368 7.84438 19.8181 7.91267L18.6723 12.0661Z"
                            fill="white" />
                    </g>
                </svg>
                <span class="ml-2 md:flex hidden w-5/6  text-sm font-medium">Products</span>
                <span
                    class=" text-md  font-bold {{ request()->routeIs('admin.products') || str_contains(request()->route()->uri, 'category') || str_contains(request()->route()->uri, 'edit_menu') ? 'visible' : 'hidden' }}">|</span>
            </a>
            {{-- Orders --}}
            <a class="flex items-center w-full h-12 px-3 mt-2 text-gray-200 hover:bg-flame transition duration-500 ease-in-out transform rounded-md {{ request()->routeIs('admin.Orders') ? 'bg-flame' : '' }} "
                href="{{ route('admin.Orders') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">

                    <g clip-path="url(#clip0_103_1151)">
                        <path
                            d="M2.56812 8.99399C2.56759 8.2062 2.72247 7.42603 3.02388 6.69818C3.3253 5.97032 3.76733 5.30907 4.32466 4.7523C4.882 4.19552 5.54369 3.75415 6.27185 3.45346C7 3.15278 7.78032 2.99868 8.56812 2.99999H16.5681C19.8811 2.99999 22.5681 5.69499 22.5681 8.99399V21H8.56812C5.25512 21 2.56812 18.305 2.56812 15.006V8.99399ZM20.5681 19V8.99399C20.5655 7.93449 20.143 6.91923 19.3933 6.17061C18.6435 5.42199 17.6276 5.00105 16.5681 4.99999H8.56812C8.04296 4.99868 7.52272 5.10104 7.03721 5.30122C6.55171 5.5014 6.1105 5.79545 5.73888 6.16651C5.36726 6.53757 5.07255 6.97834 4.87164 7.46354C4.67074 7.94875 4.56759 8.46884 4.56812 8.99399V15.006C4.57076 16.0655 4.99323 17.0808 5.74297 17.8294C6.49272 18.578 7.50861 18.9989 8.56812 19H20.5681ZM14.5681 11H16.5681V13H14.5681V11ZM8.56812 11H10.5681V13H8.56812V11Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_103_1151">
                            <rect width="24" height="24" fill="white" transform="translate(0.568115)" />
                        </clipPath>
                    </defs>

                </svg>
                <span class="ml-2 md:flex hidden w-5/6  text-sm font-medium">Orders</span>
                <span
                    class=" text-md  font-bold {{ request()->routeIs('admin.Orders') ? 'visible' : 'hidden' }}">|</span>
            </a>
            {{-- Customers --}}
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded-md hover:bg-flame transition duration-500 ease-in-out transform  {{ request()->routeIs('admin.Customers') ? 'bg-flame' : '' }} "
                href="{{ route('admin.Customers') }}">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.06812 5.25C8.06812 5.25 9.93208 5.25 11.2501 6.56802C11.2501 6.56802 12.5681 7.88604 12.5681 9.75C12.5681 9.75 12.5681 11.614 11.2501 12.932C11.2501 12.932 9.93208 14.25 8.06812 14.25C8.06812 14.25 6.20415 14.25 4.88613 12.932C4.88613 12.932 3.56812 11.614 3.56812 9.75C3.56812 9.75 3.56811 7.88604 4.88613 6.56802C4.88613 6.56802 6.20415 5.25 8.06812 5.25ZM8.06812 6.75C8.06812 6.75 6.82547 6.75 5.94679 7.62868C5.94679 7.62868 5.06811 8.50736 5.06812 9.75C5.06812 9.75 5.06812 10.9926 5.94679 11.8713C5.94679 11.8713 6.82547 12.75 8.06812 12.75C8.06812 12.75 9.31076 12.75 10.1894 11.8713C10.1894 11.8713 11.0681 10.9926 11.0681 9.75C11.0681 9.75 11.0681 8.50736 10.1894 7.62868C10.1894 7.62868 9.31076 6.75 8.06812 6.75Z"
                        fill="white" />
                    <path
                        d="M14.8181 8.25H23.8181C24.2323 8.25 24.5681 7.91421 24.5681 7.5C24.5681 7.08579 24.2323 6.75 23.8181 6.75H14.8181C14.4039 6.75 14.0681 7.08579 14.0681 7.5C14.0681 7.91421 14.4039 8.25 14.8181 8.25Z"
                        fill="white" />
                    <path
                        d="M14.8181 12.75H23.8181C24.2323 12.75 24.5681 12.4142 24.5681 12C24.5681 11.5858 24.2323 11.25 23.8181 11.25H14.8181C14.4039 11.25 14.0681 11.5858 14.0681 12C14.0681 12.4142 14.4039 12.75 14.8181 12.75Z"
                        fill="white" />
                    <path
                        d="M17.0681 17.25H23.8181C24.2323 17.25 24.5681 16.9142 24.5681 16.5C24.5681 16.0858 24.2323 15.75 23.8181 15.75H17.0681C16.6539 15.75 16.3181 16.0858 16.3181 16.5C16.3181 16.9142 16.6539 17.25 17.0681 17.25Z"
                        fill="white" />
                    <path
                        d="M11.2873 15.341C12.708 16.4438 13.1541 18.1861 13.1541 18.1861C13.239 18.5179 13.5381 18.75 13.8806 18.75L13.8957 18.7499C13.9534 18.7487 14.0107 18.7409 14.0666 18.7266C14.3985 18.6416 14.6306 18.3426 14.6306 18.0001L14.6305 17.985C14.6293 17.9273 14.6215 17.8699 14.6072 17.814C14.0336 15.574 12.207 14.1561 12.207 14.1561C10.3804 12.7383 8.06812 12.7383 8.06812 12.7383C5.75581 12.7383 3.9292 14.1561 3.9292 14.1561C2.1026 15.574 1.52905 17.814 1.52905 17.814C1.51349 17.8748 1.50562 17.9373 1.50562 18C1.50562 18.0107 1.50584 18.0214 1.5063 18.032C1.51157 18.1556 1.5473 18.2759 1.61032 18.3823C1.71168 18.5534 1.87689 18.6773 2.06959 18.7266C2.13037 18.7422 2.19287 18.75 2.25562 18.75C2.26628 18.75 2.27695 18.7498 2.28761 18.7494C2.41114 18.7441 2.53145 18.7084 2.63783 18.6453C2.80897 18.544 2.93284 18.3788 2.98218 18.1861C3.42827 16.4438 4.84896 15.341 4.84896 15.341C6.26965 14.2383 8.06812 14.2383 8.06812 14.2383C9.86658 14.2383 11.2873 15.341 11.2873 15.341Z"
                        fill="white" />
                </svg>
                <span class="ml-2 w-5/6 md:flex hidden text-sm font-medium">Customers</span>
                <span
                    class="text-md  font-bold {{ request()->routeIs('admin.Customers') ? 'visible' : 'hidden' }}">|</span>

            </a>
        </div>
    </div>
    <!-- log out -->
    <form
        class="my-10 cursor-pointer flex items-center w-full px-6 h-16 hover:text-white transition duration-500 ease-in-out transform  text-flame mt-auto "
        method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <svg class="w-6 h-6 stroke-current hover:stroke-white" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <path
                d="M16.5681 20L17.5681 20C18.3638 20 19.1268 19.6839 19.6894 19.1213C20.252 18.5587 20.5681 17.7956 20.5681 17L20.5681 7C20.5681 6.20435 20.252 5.44129 19.6894 4.87868C19.1268 4.31607 18.3638 4 17.5681 4L16.5681 4M8.56812 8L4.56812 12M4.56812 12L8.56812 16M4.56812 12L16.5681 12"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="ml-2 text-sm md:flex hidden font-medium" href="{{ route('logout') }}"
            @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </span>
    </form>

</div>

<x-HtmlPage>
    <div class="w-screen p-2 h-screen  overflow-hidden">
        <div class="h-full w-full  overflow-hidden">
            <div class="h-full overflow-hidden  shadow-xl">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full ">
                    <div class="hidden sm:flex w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>

                    <div
                        class="sm:w-10/12 w-12/12 h-full  px-1 sm:ml-2  overflow-x-hidden custom-scrollbar  rounded-lg text-white">
                        <header style="height: 16rem " class="  bg-slateGreen place-items-center  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-1/2  grid grid-cols-2 px-8 ">
                                <div class="h-full w-full  flex items-center ">
                                    <h1 class="font-PlayfairDisplay text-3xl sm:text-4xl ">
                                        Profile
                                    </h1>
                                </div>

                                <div class="md:flex hidden justify-end items-center h-full w-full ">
                                    <img src="{{ asset('images/logo-white.png') }}" alt="" class="w-10 ">
                                    <span
                                        class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-white font-PlayfairDisplay">Ratu
                                        Boga</span>
                                </div>
                            </div>

                        </header>
                        <main>
                            {{-- content main --}}
                            <div
                                class="grid    md:overflow-hidden mx-8 -mt-28  text-junggleGreen shadow-md  h-full rounded-xl   ">
                                <div class="bg-white h-full w--full">
                                    <div class="mx-20  py-8 flex item-center w-full">
                                        <div class="flex items-center">
                                            <a class="flex items-center w-14 md:w-full "
                                                href="{{ route('admin.Profile') }}">
                                                {!! Auth::user()->profile_photo_url
                                                    ? '<img src="' .
                                                        Auth::user()->profile_photo_url .
                                                        '" alt="' .
                                                        Auth::user()->name .
                                                        '" alt="Profil Picture" class="mx-auto rounded-full bg-white md:w-28 md:h-28 h-12 w-12 object-cover">'
                                                    : '<div class="mx-auto rounded-full bg-white w-24 h-24 flex items-center justify-center text-2xl text-gray-500">{{ substr(Auth::user()->name, 0, 1) }}</div>' !!}
                                            </a>
                                        </div>
                                        <div class=" my-auto mx-4 ">
                                            <h3 class="mb-2 my-auto md:text-2xl text-sm font-bold ">
                                                {{ Auth::user()->name }}
                                            </h3>
                                            <h4 class=" md:text-md text-md ">Admin restaurant</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white pb-10 border px-4">
                                    <h1 class="text-xl font-bold py-2">Account settings</h1>
                                    <div class="bg-white w-full ">
                                        <div class="py-4">
                                            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                @livewire('profile.update-profile-information-form')
                                            @endif
                                        </div>
                                        <h1 class="text-xl font-bold py-2">Change password</h1>
                                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.update-password-form')
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div>

                            </div>

                        </main>


                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- ////delete modal --}}
    <x-modal-ratu-boga id="confirmationModal" name="delete" title="Warning">
        @slot('colorAlertModal')
            bg-warning
        @endslot
        @slot('modalConten')
            <x-delete-modal>
                @slot('item')
                @endslot
            </x-delete-modal>
        @endslot
    </x-modal-ratu-boga>

</x-HtmlPage>

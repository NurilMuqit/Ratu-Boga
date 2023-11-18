<x-HtmlPage>
    <div class="p-2 w-screen h-screen ">
        <div class="h-full w-full">
            <div class="h-full overflow-hidden shadow-xl sm:rounded-lg">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="hidden sm:flex w-2/12 h-full ">
                        <x-AdminNavbar />
                    </div>
                    <div class=" overflow-auto ml-2 sm:w-10/12 w-full bg-white rounded-lg text-junggleGreen">
                        <div class=" font-PlayfairDisplay pl-8 bg-white  rounded-lg">
                            <h1 class=" mt-8 text-4xl text-gray-900">
                                Profile
                            </h1>
                        </div>
                        <div>
                            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                    @livewire('profile.update-profile-information-form')

                                    <x-section-border />
                                @endif

                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.update-password-form')
                                    </div>

                                    <x-section-border />
                                @endif

                                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.two-factor-authentication-form')
                                    </div>

                                    <x-section-border />
                                @endif

                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.logout-other-browser-sessions-form')
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                                    <x-section-border />

                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.delete-user-form')
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</x-HtmlPage>

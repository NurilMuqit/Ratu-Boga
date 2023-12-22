<x-form-section submit="updateProfileInformation" class="w-full">


    <x-slot name="form" class="w-full">
        <!-- Profile Photo -->
        <div class="grid grid-cols-5 h-full w-full">


            <div class="border-2 h-full rounded-lg  photo pb-14 px-4 pt-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div x-data="{ photoName: null, photoPreview: null }" class="h-full">
                        <!-- Profile Photo File Input -->
                        <input type="file" class="hidden" wire:model.live="photo" x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
                        <div class="relative rounded-md h-full bg-white border" x-show="!photoPreview">
                            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                                class="w-full h-full object-cover">
                            <!-- Button Select A New Photo -->
                            <x-secondary-button class="absolute rounded-md -mt-12 h-12 w-full" type="button"
                                x-on:click.prevent="$refs.photo.click()">
                                {{ __('Upload Photo') }}
                            </x-secondary-button>

                        </div>

                        <!-- New Profile Photo Preview -->
                        <div class="relative rounded-md h-full bg-white border" x-show="photoPreview"
                            style="display: none;">
                            <span class="block w-full h-full  bg-cover"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                            <!-- Button Select A New Photo -->
                            <x-secondary-button class="absolute rounded-md -mt-12 h-12 w-full" type="button"
                                x-on:click.prevent="$refs.photo.click()">
                                {{ __('Upload Photo') }}
                            </x-secondary-button>
                        </div>
                        <p style="font-size: 0.6rem" class=" opacity-75 text-center mt-4">Image size should be under
                            1MB
                            and
                            image ration needs to be 1:1</p>
                        <x-input-error for="photo" class="mt-2" />

                    </div>
                @endif
            </div>

            <div class="form22 col-span-4 py-4 ">
                <!-- Name -->
                <div class="w-full px-8 py-2">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-inputadmin id="name" type="text" class="mt-1  w-full" wire:model="state.name" required
                        autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="w-full px-8 py-2">

                    <div class="grid update_menu grid-cols-1 space-y-1">
                        <x-label for="email" class="text-sm font-bold  tracking-wide" value="{{ __('Email') }}" />
                        <x-inputadmin id="email" type="email" class="mt-1  w-full" wire:model="state.email"
                            required autocomplete="username" />
                        <x-input-error for="email" class="mt-2" />
                        <x-label for="phone" class="mt-4" value="{{ __('Phone') }}" />
                        <x-inputadmin id="phone" type="text" class="mt-2 w-full" wire:model="state.phone"
                            required autocomplete="phone" />

                    </div>

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                            !$this->user->hasVerifiedEmail())
                        <p class="text-sm mt-2">
                            {{ __('Your email address is unverified.') }}

                            <button type="button"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                wire:click.prevent="sendEmailVerification">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if ($this->verificationLinkSent)
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif

                    @endif
                    <div class="w-full pt-6">
                        @if (isset($actions))
                            <div class="w-full">
                                {{ $actions }}
                            </div>
                        @endif


                        <div class="flex item-center">
                            <x-button wire:loading.attr="disabled" class="px-8" wire:target="photo">
                                {{ __('Save') }}
                            </x-button>
                            <x-action-message class="px-8 my-auto" on="saved">
                                {{ __('Saved') }}
                            </x-action-message>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        </div>
        @if (session()->has('success'))
            <x-alert>
                @slot('colorAlert')
                    bg-success
                @endslot
                @slot('AlertConten')
                    <h3 class="font-bold -mt-6 text-2xl">Nice!</h3>
                    {{ session()->get('success') }}
                @endslot
            </x-alert>
        @endif

        @if (session()->has('failure'))
            <x-alert>
                @slot('colorAlert')
                    bg-flame
                @endslot
                @slot('AlertConten')
                    <h3 class="font-bold -mt-8 text-xl">Oops! An Error Occurred</h3>
                    {{ session()->get('failure') }}
                @endslot
            </x-alert>
        @endif
    </x-slot>



</x-form-section>

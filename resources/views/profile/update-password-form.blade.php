<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-inputadmin id="current_password" type="password" class="mt-2 block w-full"
                wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-inputadmin id="password" type="password" class="mt-2 block w-full" wire:model="state.password"
                autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-inputadmin id="password_confirmation" type="password" class="mt-2 block w-full"
                wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
        <div class="w-full pt-6">
            @if (isset($actions))
                <div class="w-full">
                    {{ $actions }}
                </div>
            @endif
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

            <x-button class="px-8">
                {{ __('Save') }}
            </x-button>
        </div>
    </x-slot>



</x-form-section>

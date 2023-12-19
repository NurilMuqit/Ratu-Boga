@props(['submit'])

<div {{ $attributes->merge(['class' => ' ']) }}>


    <div class="">
        <form wire:submit="{{ $submit }}">

            <div class="bg-white  w-full">
                <div
                    class=" {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md w-full' : 'w-full sm:rounded-md' }}">

                    <div class="w-full " submit="updateProfileInformation">
                        {{ $form }}

                    </div>

                </div>
            </div>



        </form>
    </div>
</div>

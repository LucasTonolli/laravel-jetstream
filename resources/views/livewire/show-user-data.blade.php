<div>
    <x-confirms-password wire:then="showUser">
        <x-button type="button" wire:loading.attr="disabled">
            {{ __('Enable') }}
        </x-button>
    </x-confirms-password>


    @if($showUser)
        <ul>
            <li>Name: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
        </ul>
    @endif
</div>

<x-layout>
    <x-auth-card>
        <x-slot name="header">
            {{ __('Dashboard') }}
        </x-slot>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </x-auth-card>
</x-layout>

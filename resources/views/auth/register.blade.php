<x-layout>
    <x-auth-card>
        <x-slot name="header">
            {{ __('Register') }}
        </x-slot>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <x-input-group
                fieldLabel="Name"
                fieldName="name"
                fieldType="text" />

            <x-input-group
                fieldLabel="E-Mail Address"
                fieldName="email"
                fieldType="email" />

            <x-input-group
                fieldLabel="Password"
                fieldName="password"
                fieldType="password" />

            <x-input-group
                fieldLabel="Confirm Password"
                fieldName="password_confirmation"
                fieldType="password" />

            <x-submit-group buttonLabel="Register" />
        </form>
    </x-auth-card>
</x-layout>

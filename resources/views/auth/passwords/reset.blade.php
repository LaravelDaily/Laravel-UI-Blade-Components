<x-layout>
    <x-auth-card>
        <x-slot name="header">
            {{ __('Reset Password') }}
        </x-slot>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <x-input-group
                fieldLabel="E-Mail Address"
                fieldName="email"
                fieldType="email"
                fieldValue="{{ $email }}" />

            <x-input-group
                fieldLabel="Password"
                fieldName="password"
                fieldType="password" />

            <x-input-group
                fieldLabel="Confirm Password"
                fieldName="password_confirmation"
                fieldType="password" />

            <x-submit-group buttonLabel="Reset Password" />
        </form>
    </x-auth-card>
</x-layout>

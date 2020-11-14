<x-layout>
    <x-auth-card>
        <x-slot name="header">
            {{ __('Reset Password') }}
        </x-slot>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <x-input-group
                fieldLabel="E-Mail Address"
                fieldName="email"
                fieldType="email" />

            <x-submit-group buttonLabel="Send Password Reset Link" />
        </form>
    </x-auth-card>
</x-layout>

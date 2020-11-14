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

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-layout>

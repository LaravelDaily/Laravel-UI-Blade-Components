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

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-layout>

<x-layout>
    <x-auth-card>
        <x-slot name="header">
            {{ __('Confirm Password') }}
        </x-slot>
        {{ __('Please confirm your password before continuing.') }}

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <x-input-group
                fieldLabel="Password"
                fieldName="password"
                fieldType="password" />

            <x-submit-group buttonLabel="Confirm Password" class="col-md-8">
                <x-slot name="link">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </x-slot>
            </x-submit-group>
        </form>
    </x-auth-card>
</x-layout>

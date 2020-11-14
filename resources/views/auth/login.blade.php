<x-layout>
    <x-auth-card>
        <x-slot name="header">
            {{ __('Login') }}
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <x-input-group
                fieldLabel="E-Mail Address"
                fieldName="email"
                fieldType="email" />

            <x-input-group
                fieldLabel="Password"
                fieldName="password"
                fieldType="password" />

            <x-checkbox-group
                fieldLabel="Remember Me"
                fieldName="remember" />

            <x-submit-group buttonLabel="Login" class="col-md-8">
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

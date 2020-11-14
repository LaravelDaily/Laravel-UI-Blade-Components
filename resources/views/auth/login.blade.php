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

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </x-auth-card>
</x-layout>

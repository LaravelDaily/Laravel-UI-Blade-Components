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

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Confirm Password') }}
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

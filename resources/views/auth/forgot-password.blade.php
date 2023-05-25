
<style>
    button[type="submit"] ,button[type="submit"]:hover,button[type="submit"]:focus,button[type="submit"]:active {
    display: block;
    width: 100%;
    text-align: center;
height:44px  ;  
background: #589442;
outline: none;
  border: none;
  box-shadow: none;
}
input:focus {
    outline: none !important;
    border-color: #589442 !important;
    box-shadow: 0 0 0 3px rgba(205, 161, 106, 0.2) !important;
}
</style>
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

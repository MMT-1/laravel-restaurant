<style>
    input:focus {
    outline: none;
    border-color: #589442;
    outline: #589442;
    box-shadow: 0 0 0 3px rgba(205, 161, 106, 0.2);
}
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
/* Style Register link */
.register-link {
    color: #3182ce;
    text-decoration: none;
    font-weight: bold;
    margin-left: 5px;
}

.register-link:hover {
    text-decoration: underline;
}

/* Style "don't have an account Register" text */
.dont-have-account {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.dont-have-account span {
    font-weight: bold;
}


[type=checkbox]:checked {
   color: #589442;
}
</style>
<x-guest-layout>
    <x-authentication-card>
         <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <label for="remember_me" class="ml-2 block text-sm text-gray-600">{{ __('Remember me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="mt-4">
                <x-button class="w-full  btn-login">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <div class="dont-have-account">
                <span>Don't have an account</span>
                <a href="{{ route('register') }}" class="register-link">Register</a>
            </div>

            <!-- <div class="mt-4 text-center">
                <p>Don't have an account? <a href="{{ route('register') }}" class="text-indigo-500 hover:text-indigo-600 font-medium">Register</a></p>
            </div> -->
        </form>
    </x-authentication-card>
</x-guest-layout>












<!-- <x-guest-layout>
    <x-authentication-card> -->
        <!-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> -->

        <!-- <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <p>don't have an account <a href="{{ route('register') }}">Register</a>
</p>
        </form>
    </x-authentication-card>
</x-guest-layout> -->

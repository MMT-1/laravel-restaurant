
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
    .btn-btn{
        border:0;
    outline:0;
    }
input:focus {
    outline: none !important;
    border-color: #589442 !important;
    box-shadow: 0 0 0 3px rgba(205, 161, 106, 0.2) !important;
}
/* Style Register link */
.login-link {
    color: #3182ce;
    text-decoration: none;
    font-weight: bold;
    margin-left: 5px;
}

.login-link:hover {
    text-decoration: underline;
}

/* Style "don't have an account Register" text */
.already-registered {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.already-registered span {
    font-weight: bold;
}


</style>
<x-guest-layout>
    <x-authentication-card>
        

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            

            
            <div class="mt-4">
                <x-button class="w-full btn-btn">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="mt-4 text-center already-registered">
                <span>Already have an account?</span>
                <a class="login-link" href="{{ route('login') }}">
                    {{ __('Sign in') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

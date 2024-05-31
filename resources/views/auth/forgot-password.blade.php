<x-guest-layout>
    <x-slot name="header">
        <div class="fak " >
            <img src="/image/BG-ForgotPW.png" alt="Background Image" class="w-screen" />
            
        </div>
    </x-slot>
    <h1 class="text-3xl font-bold mb-4">Forgot Password</h1>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? Fill the email below and let us send you an email to reset your pasword.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="{{ __('Email') }}"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <x-primary-button class="w-full mt-4">
            {{ __('Send Email') }}
        </x-primary-button>
        <div class="mt-4 text-center">
            <a class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already have an account? ') }}<b>{{ __('Sign In!') }}</b>
            </a>
        </div>
    </form>
</x-guest-layout>

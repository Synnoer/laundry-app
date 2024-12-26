<x-guest-layout>
    <style>
        .background-image {
            background-image: url('/image/BG-ForgotPW.png');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
    </style>

    <div class="background-image">
        <div class="content-container">
            <h1 class="text-3xl font-bold mb-4 text-center">Forgot Password</h1>
            <p class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                {{ __('Forgot your password? Fill in your email below, and we’ll send you an email to reset it.') }}
            </p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="{{ __('Email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <x-primary-button class="w-full py-2 shadow-sm">
                    {{ __('Send Email') }}
                </x-primary-button>

                <div class="mt-4 text-center">
                    <a class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already have an account? ') }}<b>{{ __('Sign In!') }}</b>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

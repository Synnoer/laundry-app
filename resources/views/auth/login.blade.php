<x-guest-layout>
    <x-slot name="header">
        <div class="fak" >
            <img src="/image/BG-Gambar.png" alt="Background Image" class="w-screen"  />
        </div>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <h1 class="text-3xl font-bold mb-4">Sign In</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Password -->
        <div class="mb-4">
            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password"
                placeholder="{{ __('Password') }}" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
<!--
        <div class="mb-4 relative">
            <x-text-input id="password" class="block mt-1 w-full pr-10"
                    type="password"
                    name="password"
                    required autocomplete="current-password"
                    placeholder="{{ __('Password') }}" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                    <button type="button" id="togglePassword" class="focus:outline-none">
                        // Default to eye icon, you can change it to another icon of your preference
                        <svg id="eyeIcon" class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.877 3.057-3.904 5.5-7.542 5.5S3.335 15.057 2.458 12z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </button>
                </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
-->
<!--
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePasswordButton.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the icon
            if (type === 'password') {
                eyeIcon.setAttribute('d', 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.877 3.057-3.904 5.5-7.542 5.5S3.335 15.057 2.458 12z');
            } else {
                eyeIcon.setAttribute('d', 'M12 4.5C7.53 4.5 3.739 7.447 2.458 12c.877 3.057 3.904 5.5 7.542 5.5 4.478 0 8.268-2.943 9.542-7C20.268 7.447 16.477 4.5 12 4.5zm0 8.5a3 3 0 100-6 3 3 0 000 6z');
            }
        });
    });
</script> -->

        <!-- Remember Me -->
        <div class="mb-4 flex justify-between items-center">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-100 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Forgot password?') }} <b>{{ __('Click Here!') }}</b>
            </a>
            @endif
        </div>
        <x-primary-button class="w-full py-2 shadow-sm ">{{ __('Sign in') }}</x-primary-button>

        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900 ">
                {{ __('Doesn`t have any account? ') }}  <b>{{ __('Sign Up!') }}</b>
            </a>
        </div>
    </form>
</x-guest-layout>

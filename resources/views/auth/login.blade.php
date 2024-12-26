<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <img src="/image/BG-Gambar.png" alt="Background" class="w-full max-h-screen object-cover" />
        </div>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto">
        <h1 class="text-3xl font-bold text-center mb-6">Sign In</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me and Forgot Password -->
            <div class="mb-4 flex justify-between items-center">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot password?</a>
                @endif
            </div>

            <!-- Sign In Button -->
            <x-primary-button class="w-full py-2">Sign In</x-primary-button>

            <!-- Sign Up Link -->
            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline">Don’t have an account? <b>Sign Up!</b></a>
            </div>
        </form>
    </div>
</x-guest-layout>

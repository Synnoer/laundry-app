<x-guest-layout>
    <x-slot name="header">
        <div>
            <img src="/image/BG-SignUp.png" alt="Background Image" class="w-full max-h-screen object-cover" />
        </div>
    </x-slot>

    <h1 class="text-3xl font-bold mb-4 text-center">Sign Up</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="{{ __('Full Name') }}" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />   
        </div>

        <!-- Gender -->
        <div class="mb-4">
            <select id="gender" name="gender" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                <option value="" disabled selected>{{ __('Select Gender') }}</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>{{ __('Male') }}</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>{{ __('Female') }}</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mb-4">
            <x-text-input id="address" class="block w-full" type="text" name="address" :value="old('address')" required placeholder="{{ __('Address') }}" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <x-text-input id="phone" class="block w-full" type="text" name="phone" :value="old('phone')" required placeholder="{{ __('Phone Number') }}" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-text-input id="password" class="block w-full" type="password" name="password" required placeholder="{{ __('Password') }}" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="w-full py-2">{{ __('Sign Up') }}</x-primary-button>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">
                {{ __('Already have an account? ') }}<b>{{ __('Sign In!') }}</b>
            </a>
        </div>
    </form>
</x-guest-layout>

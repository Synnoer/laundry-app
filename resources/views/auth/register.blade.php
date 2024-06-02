<x-guest-layout>
    <x-slot name="header">
        <div class="fak" >
            <img src="/image/BG-SignUp.png" alt="Background Image" class="w-screen"  />
            
        </div>
    </x-slot>
    <h1 class="text-3xl font-bold mb-4">Sign Up</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="{{ __('Full Name') }}"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />   
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required autocomplete="gender" placeholder="{{ __('Gender') }}" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" placeholder="{{ __('Address') }}"/>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" placeholder="{{ __('Phone Number') }}" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="{{ __('Email') }}"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="{{ __('Password') }}"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                                 name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="w-full mt-4">
            {{ __('Sign Up') }}
        </x-primary-button>
        <div class="mt-4 text-center">
            <a class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already have an account? ') }}<b>{{ __('Sign In!') }}</b>
            </a>
        </div>
    </form>
</x-guest-layout>

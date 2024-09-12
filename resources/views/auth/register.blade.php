<x-guest-layout>
    <!-- Form Container -->
    <form method="POST" action="{{ route('register') }}" style="background-color: #f0f8ff; padding: 40px; border-radius: 15px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);">
        @csrf

        <!-- Title -->
        <div class="text-center mb-4">
            <h2 style="color: #2c3e50; font-weight: bold;">Create a New Account</h2>
        </div>

        <!-- Name -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="name" :value="__('Name')" style="font-weight: bold; color: #34495e;" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="border: 1px solid #ccc; padding: 12px; border-radius: 8px; background-color: #e8f0fe;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="email" :value="__('Email')" style="font-weight: bold; color: #34495e;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="border: 1px solid #ccc; padding: 12px; border-radius: 8px; background-color: #e8f0fe;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="password" :value="__('Password')" style="font-weight: bold; color: #34495e;" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="border: 1px solid #ccc; padding: 12px; border-radius: 8px; background-color: #e8f0fe;" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="font-weight: bold; color: #34495e;" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style="border: 1px solid #ccc; padding: 12px; border-radius: 8px; background-color: #e8f0fe;" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Register Button -->
        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-3" style="background-color: #4CAF50; padding: 10px 30px; border-radius: 8px; color: white; font-weight: bold;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

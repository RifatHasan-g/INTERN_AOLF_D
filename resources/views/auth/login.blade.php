<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Form Container -->
    <form method="POST" action="{{ route('login') }}" style="background-color: #f0f8ff; padding: 40px; border-radius: 15px; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);">
        @csrf

        <!-- Title -->
        <div class="text-center mb-4">
            <h2 style="color: #2c3e50; font-weight: bold;">Login to Your Account</h2>
        </div>

        <!-- Email Address -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="email" :value="__('Email')" style="font-weight: bold; color: #34495e;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="border: 1px solid #ccc; padding: 12px; border-radius: 8px; background-color: #e8f0fe;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="password" :value="__('Password')" style="font-weight: bold; color: #34495e;" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" style="border: 1px solid #ccc; padding: 12px; border-radius: 8px; background-color: #e8f0fe;" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Forgot Password and Log In Button -->
        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3" style="background-color: #3498db; padding: 10px 30px; border-radius: 8px; color: white; font-weight: bold;">
                {{ __('Log In') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Register Section -->
    <div class="mt-4 text-center">
        <p style="color: #2c3e50; font-weight: bold;">Don't have an account?</p>
        <a href="{{ route('register') }}" class="btn" style="background-color: #e74c3c; color: white; padding: 5px 20px; border-radius: 8px; text-decoration: none; font-weight: bold;">
            {{ __('Register') }}
        </a>
    </div>
</x-guest-layout>

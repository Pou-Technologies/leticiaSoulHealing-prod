<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-8">
        <h2 class="text-2xl font-serif text-gray-900">Welcome Back</h2>
        <p class="text-gray-500 font-light text-sm mt-2">Please sign in to continue your journey</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-600 font-medium" />
            <x-text-input id="email"
                class="block mt-1 w-full border-gray-200 focus:border-brand-teal focus:ring-brand-teal rounded-xl px-4 py-3"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-600 font-medium" />

            <x-text-input id="password"
                class="block mt-1 w-full border-gray-200 focus:border-brand-teal focus:ring-brand-teal rounded-xl px-4 py-3"
                type="password" name="password" required autocomplete="current-password" placeholder="Your password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 flex justify-between items-center">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-brand-teal shadow-sm focus:ring-brand-teal" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-500 hover:text-brand-teal rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex flex-col items-center mt-8 space-y-4">
            <x-primary-button
                class="w-full justify-center py-4 bg-brand-teal hover:bg-opacity-90 rounded-xl text-base font-medium shadow-lg shadow-brand-teal/20">
                {{ __('Log in') }}
            </x-primary-button>

            <a class="underline text-sm text-gray-500 hover:text-brand-teal rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                {{ __('Don\'t have an account? Register') }}
            </a>
        </div>
    </form>
</x-guest-layout>
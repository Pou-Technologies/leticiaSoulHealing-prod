<x-guest-layout>
    <div class="text-center mb-8">
        <h2 class="text-2xl font-serif text-gray-900">Create Account</h2>
        <p class="text-gray-500 font-light text-sm mt-2">Join our community of healing and growth</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-gray-600 font-medium" />
            <x-text-input id="name"
                class="block mt-1 w-full border-gray-200 focus:border-brand-teal focus:ring-brand-teal rounded-xl px-4 py-3"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                placeholder="Your full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-600 font-medium" />
            <x-text-input id="email"
                class="block mt-1 w-full border-gray-200 focus:border-brand-teal focus:ring-brand-teal rounded-xl px-4 py-3"
                type="email" name="email" :value="old('email')" required autocomplete="username"
                placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-600 font-medium" />

            <x-text-input id="password"
                class="block mt-1 w-full border-gray-200 focus:border-brand-teal focus:ring-brand-teal rounded-xl px-4 py-3"
                type="password" name="password" required autocomplete="new-password" placeholder="Min. 8 characters" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                class="text-gray-600 font-medium" />

            <x-text-input id="password_confirmation"
                class="block mt-1 w-full border-gray-200 focus:border-brand-teal focus:ring-brand-teal rounded-xl px-4 py-3"
                type="password" name="password_confirmation" required autocomplete="new-password"
                placeholder="Repeat password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center mt-8 space-y-4">
            <x-primary-button
                class="w-full justify-center py-4 bg-brand-teal hover:bg-opacity-90 rounded-xl text-base font-medium shadow-lg shadow-brand-teal/20">
                {{ __('Start My Journey') }}
            </x-primary-button>

            <a class="underline text-sm text-gray-500 hover:text-brand-teal rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already have an account? Log in') }}
            </a>
        </div>
    </form>
</x-guest-layout>
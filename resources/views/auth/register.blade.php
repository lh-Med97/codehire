<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-100 to-white dark:from-gray-900 dark:to-gray-800">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-8 text-center">
                <a href="/" class="inline-block mb-4">
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">
                        CodeHire
                    </h1>
                </a>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Create an Account</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Join our community today</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-gray-700 dark:text-gray-300" />
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <x-text-input id="name" class="block mt-1 w-full pl-10" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name" />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300" />
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <x-text-input id="email" class="block mt-1 w-full pl-10" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300" />
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <x-text-input id="password" class="block mt-1 w-full pl-10"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Choose a strong password" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 dark:text-gray-300" />
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <x-text-input id="password_confirmation" class="block mt-1 w-full pl-10"
                            type="password"
                            name="password_confirmation"
                            required autocomplete="new-password"
                            placeholder="Confirm your password" />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-6">
                    <x-primary-button class="w-full justify-center py-3 bg-blue-600 hover:bg-blue-700">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <div class="mt-6 text-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Already have an account?</span>
                    <a href="{{ route('login') }}" class="text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 ml-1">Sign in</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

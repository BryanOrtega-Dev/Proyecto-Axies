<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input   placeholder="Your Full Name or Email" 
                            id="email" 
                            class="border w-[690px] border-secundary-grey rounded-lg bg-transparent outline-none font-normal text-14px leading-[22px] text-white-2 py-3 ps-5" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-6">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" 
                            class="border w-[690px] border-secundary-grey rounded-lg bg-transparent outline-none font-normal text-14px leading-[22px] text-white-2 py-3 ps-5"
                            type="password"
                            name="password"
                            placeholder="Your Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-8 w-[690px]">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="rounded hover:opacity-70  border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm leading-[22px] font-normal text-white">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-15px  leading-[22px] text-white hover:opacity-70 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class=" mt-12">
            <x-primary-button class="">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

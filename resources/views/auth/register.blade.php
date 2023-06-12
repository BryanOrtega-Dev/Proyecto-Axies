<x-guest-layout>

    <h4 class="font-bold text-4xl leading-[44px] text-white">Signup to NFTs</h4>
    <span class="mt-16 font-normal text-lg leading-7 text-secundary-white">Or login with email</span>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-[30px]">
            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
            <x-text-input 
                id="name" 
                placeholder="Your Full Name"
                class="border w-[690px] border-secundary-grey rounded-lg bg-transparent outline-none font-normal text-14px leading-[22px] text-white-2 py-3 ps-5" 
                type="text" name="name" 
                :value="old('name')" 
                required autofocus autocomplete="name" />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-8">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input 
                id="email" 
                placeholder="Your Email Address"
                class="border w-[690px] border-secundary-grey rounded-lg bg-transparent outline-none font-normal text-14px leading-[22px] text-white-2 py-3 ps-5" 
                type="email" name="email" 
                :value="old('email')" 
                required autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-8">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" 
                            placeholder="Set Your Password"
                            class="border w-[690px] border-secundary-grey rounded-lg bg-transparent outline-none font-normal text-14px leading-[22px] text-white-2 py-3 ps-5" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="my-8 ">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

            <x-text-input id="password_confirmation" 
                            placeholder="Confirm Your Password"
                            class="border w-[690px] border-secundary-grey rounded-lg bg-transparent outline-none font-normal text-14px leading-[22px] text-white-2 py-3 ps-5" 
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <a class="text-15px  leading-[22px] text-white hover:opacity-70 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <div class="mt-8">
            <x-primary-button class="px-[315px]">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

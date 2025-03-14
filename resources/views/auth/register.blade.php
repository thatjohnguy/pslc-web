<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            
            <!-- Cadet Number -->
            <div class="mt-4">
            
                <x-label for="cadet_number" :value="__('Cadet Number')" />

                <x-input id="cadet_number" class="block mt-1 w-full" type="text" name="cadet_number" :value="old('cadet_number')" required autofocus />
            </div>
            
            <!-- Service Number -->
            <div class="mt-4">
               <x-label for="service_number" :value="__('Service Number')" />

                <x-input id="service_number" class="block mt-1 w-full" type="text" name="service_number" :value="old('service_number')" required autofocus />
            </div>

            <!-- SBC -->
            <div class="mt-4">
               <x-label for="sbc" :value="__('SBC')" />
               <x-input-select id="sbc" class="block mt-1 w-full" name="sbc" :value="old('sbc')" required autofocus />

                {{-- <x-input id="sbc" class="block mt-1 w-full" type="text" name="sbc" :value="old('sbc')" required autofocus /> --}}
            </div>

           <!-- Phone number -->
           <div class="mt-4">
            <x-label for="phone" :value="__('Phone number')" />

            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
        </div>

            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

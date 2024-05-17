<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- phone -->
        <div class="mt-2 grid grid-cols-2 gap-4">
            <!-- Phone -->
            <div>
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" class="w-full" type="tel" name="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Role -->
            <div>
                <x-input-label for="role" :value="__('Role')" />
                <x-select id="role" class="w-full" name="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="parent">Parent</option>
                    <option value="teacher">Teacher</option>
                </x-select>
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>
        </div>


        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 mt-4"  style="margin-top: 30px !important">
            <x-primary-button style="font-family: 'Inter', sans-serif; -webkit-text-stroke: .25px rgb(255, 255, 255); font-size:24px ">
                {{ __('Register') }}
            </x-primary-button>

            <div class="mt-4">
                <span
                    class="text-base text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Click here to ') }}
                    <a href="{{ route('login') }}" class="underline hover:text-yellow-300" style="cursor: pointer;">{{ __('login') }}</a>
                </span>
            </div>

        </div>

    </form>
</x-guest-layout>


